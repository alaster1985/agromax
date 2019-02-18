<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadTranslationFileRequest extends FormRequest
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
            'translation' => 'required|mimes:xlsx|max:4096',
        ];
    }

    public function messages()
    {
        return [
            'photo.required' => 'Please, choose a translation file',
            'photo.mime' => 'Use xlsx extension',
            'photo.max' => 'Please give some a little smaller picture. Max 4 Mb',
        ];
    }
}
