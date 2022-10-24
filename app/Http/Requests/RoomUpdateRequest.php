<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required',
            'room_type'         => 'required',
            // 'bed_type'          => 'required',
            'short_description' => 'required',
            'long_description'  => 'required',
            'room_cost'         => 'required|numeric',
            'room_amount'       => 'numeric|min:1',
            'cancellation'      => 'required',
            'room_photo'        => 'image',
        ];
    }

    public function messages()
    {
        return [
            'name.required'              => 'Room Name is Required',
            'room_type.required'         => 'Please Select Room Type',
            'bed_type.required'          => 'Please Select Bed Type',
            'short_description.required' => 'Write Short Description',
            'long_description.required'  => 'Write Description',
            'room_cost.required'         => 'Select the cost of the room',
            'room_cost.numeric'          => 'Cost type should be Number',
            'room_amount.numeric'        => 'Amount should be Number',
            'cancellation.required'      => 'Explain Cancellation Rules',
            'room_photo.image'           => 'Room Photo must be Image Type',
        ];
    }
}
