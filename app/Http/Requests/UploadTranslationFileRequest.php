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
//            'translation' => 'required|mimes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:4096',
            'translation' => 'required|mimetypes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:4096',
        ];
    }

    public function messages()
    {
        return [
            'translation.required' => 'Please, choose a translation file',
            'translation.mimes' => 'Use xlsx files only',
            'translation.max' => 'Please give some a little smaller file. Max 4 Mb',
        ];
    }
}
