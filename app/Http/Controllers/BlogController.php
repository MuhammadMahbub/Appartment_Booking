<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\BlogUpdateRequest;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog_category_index()
    {
        return view('admin.blogs.blog_category',[
            'blogCategories' => BlogCategory::orderBy('name', 'ASC')->get(),
        ]);
    }

    public function blog_category_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        BlogCategory::create([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);

        return back()->withSuccess('Created Successfully');

    }

    public function blog_category_update(Request $request, $id)
    {
        session()->put(['id' => $id]);

        $request->validate([
            'name_edit' => 'required',
        ]);

        $category = BlogCategory::find($id)->first();

        $category->update([
            'name' => $request->name_edit,
            'updated_at' => Carbon::now(),
        ]);
        $category->save();

        session()->forget('id');

        return back()->withSuccess('Updated Successfully');

    }
    public function blog_category_delete($id)
    {
        $category =  BlogCategory::find($id);

        if ($category->allBlogs->count() > 0) {
            return back()->with('error', 'Cette catégorie contient des sous-catégories. Veuillez les supprimer avant de pouvoir la supprimer.');
        }
        $category->delete();

        return back()->with('error', 'Deleted Successfully');
    }

    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create',[
            'categories' => BlogCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog = Blog::create([
            'category_id' => $request->category_id,
            'title'             => $request->title,
            'short_description' => $request->short_description,
            'long_description'       => $request->long_description,
            'meta_tags'        => $request->meta_tags,
            'meta_title'        => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_author'  => $request->meta_author,
            'meta_keywords'      => $request->meta_keywords,
            'author_id'            => Auth::id(),
            'author_quote'            => $request->author_quote,
            'status'            => $request->status,
            'created_at'        => Carbon::now(),
        ]);

        if($request->hasFile('image'))
        {
           $image      = $request->file('image');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = public_path('uploads/blogs/');
           $image->move( $location, $filename);
           $blog->image = $filename;
        }

        if($request->hasFile('image_2'))
        {
           $image      = $request->file('image_2');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = public_path('uploads/blogs/');
           $image->move( $location, $filename);
           $blog->image = $filename;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success','Créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin.blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.edit',compact('blog','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        $blog->update([
            'category_id' => $request->category_id,
            'title'             => $request->title,
            'short_description' => $request->short_description,
            'long_description'       => $request->long_description,
            'meta_tags'        => $request->meta_tags,
            'meta_title'        => $request->meta_title,
            'meta_description'  => $request->meta_description,
            'meta_author'  => $request->meta_author,
            'meta_keywords'      => $request->meta_keywords,
            'author_quote'            => $request->author_quote,
            'status'            => $request->status,
            'updated_at'        => Carbon::now(),
        ]);

        if($request->hasFile('image'))
        {
           $image      = $request->file('image');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = public_path('uploads/blogs/');
           $image->move( $location, $filename);
           $blog->image = $filename;
        }

        if($request->hasFile('image_2'))
        {
           $image      = $request->file('image_2');
           $filename   = uniqid() . '.' . $image->getClientOriginalExtension();
           $location   = public_path('uploads/blogs/');
           $image->move( $location, $filename);
           $blog->image = $filename;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success','Créé avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('error','Deleted Successfully');
    }

    public function blogSearch(Request $request)
    {
        $blogs = Blog::where('title', 'like', '%'.$request->search.'%')->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

}
