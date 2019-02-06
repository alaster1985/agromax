<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoUploadRequest extends FormRequest
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
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'photo.required' => 'Please, choose a photo for new category',
            'photo.image' => 'It was not an image',
            'photo.mime' => 'Nice try! But It was not an image',
            'photo.max' => 'Please give some a little smaller picture. Max 2 Mb',
        ];
    }
}
