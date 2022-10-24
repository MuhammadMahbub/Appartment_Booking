<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\BedType;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RoomUpdateRequest;
use App\Models\RoomPhoto;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::latest()->paginate(9);
        return view('admin.rooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms.create',[
            'roomtype' => RoomType::all(),
            'bedtype'  => BedType::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequest $request)
    {
        $room = Room::create($request->except('_token') + ['created_at' => Carbon::now()]);

        if ($request->hasFile('room_photo')) {

            $room_photo  = $request->file('room_photo');
            $filename    = uniqid() . '.' . $room_photo->extension('room_photo');
            $location    = public_path('uploads/rooms');

            $room_photo->move($location, $filename);

            $room->room_photo = $filename;
        }

        if ($request->hasFile('room_thumb')) {
            foreach ($request->file('room_thumb') as $thumb) {
                $location    = public_path('uploads/rooms');
                $filename    = uniqid() . '.' . $thumb->extension('room_photo');
                $thumb->move($location, $filename);

                RoomPhoto::insert([
                    'room_id'       => $room->id,
                    'room_thumb'    => $filename,
                    'created_at'    => Carbon::now(),
                ]);
            };
        };

        $room->save();

        return redirect()->route('room.index')->withSuccess('Created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        $single_room_info = Room::find($room->id);
        return view('admin.rooms.show', compact('single_room_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        $single_room_info = Room::find($room->id);
        $roomtype         = RoomType::all();
        $bedtype          = BedType::all();

        return view('admin.rooms.edit', compact('single_room_info', 'roomtype', 'bedtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(RoomUpdateRequest $request, $id)
    {
        $room = Room::find($id);
        $room->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if ($request->hasFile('room_photo')) {

            $room_photo  = $request->file('room_photo');
            $filename    = uniqid() . '.' . $room_photo->extension('room_photo');
            $location    = public_path('uploads/rooms');

            $room_photo->move($location, $filename);

            $room->room_photo = $filename;
        }

        if ($request->hasFile('room_thumb')) {
            foreach ($request->file('room_thumb') as $thumb) {
                $location    = public_path('uploads/rooms');
                $filename    = uniqid() . '.' . $thumb->extension('room_photo');
                $thumb->move($location, $filename);

                RoomPhoto::insert([
                    'room_id'       => $room->id,
                    'room_thumb'    => $filename,
                    'created_at'    => Carbon::now(),
                ]);
            };
        };

        $room->save();

        return redirect()->route('room.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
       Room::find($room->id)->delete();
       return back()->with('error', 'Delete Successfully!');
    }

    public function single_thumb_destroy(Request $request)
    {
       RoomPhoto::find($request->data_id)->delete();
       return response()->json('message', 'Deleted Success');
    }

    public function roomphoto_index()
    {
       $roomphoto = RoomPhoto::all();
       $room      = Room::all();
       return view('admin.rooms.roomphoto_index', compact('roomphoto','room'));
    }

    // public function roomphoto_store(Request $request)
    // {
    //     $request->validate([
    //         'room_id'    => 'required',
    //         'room_photo' => 'required|image',
    //     ]);

    //     if($request->hasFile('room_photo')){
    //         $room_photos = $request->file('room_photo');
    //         foreach ($room_photos as $photos) {
    //             $filename    = uniqid() . '.' . $photos->extension('room_photo');
    //             $location    = public_path('uploads/rooms');
    //             $photos->move($location, $filename);

    //             RoomPhoto::insert([
    //                 'room_id'    => $request->room_id,
    //                 'room_photo' => $filename,
    //                 'created_by' => Auth::id(),
    //                 'created_at' => Carbon::now(),
    //             ]);
    //         };
    //     }

    //    return redirect()->route('roomphoto.index')->with('success', 'Created Successfully');
    // }

    public function roomtype_index()
    {
       $roomtype = RoomType::all();
       return view('admin.rooms.roomtype_index', compact('roomtype'));
    }

    public function roomtype_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        RoomType::create([
            'name'       => $request->name,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now()
        ]);

       return redirect()->route('roomtype.index')->with('success', 'Created Successfully');
    }

    public function roomtype_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $room = RoomType::find($id);
        $room->update([
            'name'       => $request->name,
            'updated_by' => Auth::id(),
            'updated_at' => Carbon::now(),
        ]);

       return redirect()->route('roomtype.index')->with('success', 'Updated Successfully');
    }

    public function roomtype_destroy($id)
    {
        $rooms = Room::where('room_type', $id)->get();
        foreach($rooms as $room){
            $room->update([
                'room_type' => NULL
            ]);
        }

        RoomType::find($id)->delete();
        return redirect()->route('roomtype.index')->with('error', 'Deleted Successfully');
    }

    public function roomtype_multi_delete(Request $request)
    {
        foreach($request->ids as $id){

            $rooms = Room::where('room_type', $id)->get();
            foreach($rooms as $room){
                $room->update([
                    'room_type' => NULL
                ]);
            }

            RoomType::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function roomtype_single_delete(Request $request)
    {
        foreach($request->ids as $id){

            $rooms = Room::where('room_type', $id)->get();
            foreach($rooms as $room){
                $room->update([
                    'room_type' => NULL
                ]);
            }

            RoomType::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function date_wise_search_roomtype(Request $request)
    {
        $request->validate([
            'from_date' => 'required',
            'to_date'   => 'required',
        ]);

        $from_date  = Carbon::parse($request->from_date);
        $to_date    = Carbon::parse($request->to_date)->addDay();

        $roomtype  = RoomType::whereBetween('created_at', [$from_date, $to_date])->get();
        $count = $roomtype->count();

        $view  = view('admin.includes.roomtype_index', compact('roomtype'))->render();

        return response()->json(['data' => $view, 'count' => $count]);
    }

    public function date_wise_clear_roomtype(Request $request){
        $roomtype = RoomType::all();
        $count = $roomtype->count();

        $view = view('admin.includes.roomtype_index', compact('roomtype'))->render();
        return response()->json(['data' => $view, 'count' => $count]);
    }



    public function bedtype_index()
    {
       $bedtype = BedType::all();
       return view('admin.rooms.bedtype_index', compact('bedtype'));
    }

    public function bedtype_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        BedType::create([
            'name'       => $request->name,
            'created_by' => Auth::id(),
            'created_at' => Carbon::now()
        ]);

       return redirect()->route('bedtype.index')->with('success', 'Created Successfully');
    }

    public function bedtype_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $bed = BedType::find($id);
        $bed->update([
            'name'       => $request->name,
            'updated_by' => Auth::id(),
            'updated_at' => Carbon::now(),
        ]);

       return redirect()->route('bedtype.index')->with('success', 'Updated Successfully');
    }

    public function bedtype_destroy($id)
    {
        $rooms = Room::where('bed_type', $id)->get();
        foreach($rooms as $room){
            $room->update([
                'bed_type' => NULL
            ]);
        }

        BedType::find($id)->delete();
        return redirect()->route('bedtype.index')->with('error', 'Deleted Successfully');
    }

    public function bedtype_multi_delete(Request $request)
    {
        foreach($request->ids as $id){

            $rooms = Room::where('bed_type', $id)->get();
            foreach($rooms as $room){
                $room->update([
                    'bed_type' => NULL
                ]);
            }

            BedType::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function bedtype_single_delete(Request $request)
    {
        foreach($request->ids as $id){

            $rooms = Room::where('bed_type', $id)->get();
            foreach($rooms as $room){
                $room->update([
                    'bed_type' => NULL
                ]);
            }

            BedType::find($id)->delete();
        };

        return response()->json(['success' => 'done']);
    }

    public function date_wise_search_bedtype(Request $request)
    {
        $request->validate([
            'from_date' => 'required',
            'to_date'   => 'required',
        ]);

        $from_date  = Carbon::parse($request->from_date);
        $to_date    = Carbon::parse($request->to_date)->addDay();

        $bedtype  = BedType::whereBetween('created_at', [$from_date, $to_date])->get();
        $count = $bedtype->count();

        $view  = view('admin.includes.bedtype_index', compact('bedtype'))->render();

        return response()->json(['data' => $view, 'count' => $count]);
    }

    public function date_wise_clear_bedtype(Request $request){
        $bedtype = BedType::all();
        $count = $bedtype->count();

        $view = view('admin.includes.bedtype_index', compact('bedtype'))->render();
        return response()->json(['data' => $view, 'count' => $count]);
    }

}
