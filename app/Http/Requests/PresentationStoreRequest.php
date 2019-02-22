<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresentationStoreRequest extends FormRequest
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
            'name' => 'required|max:100|min:3',
            'pdf' => 'required_without:presentation_id|mimes:pdf',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please, set presentation name',
            'name.max' => 'Shorter please, max 100 characters',
            'name.min' => 'Very short name. At least 3 characters',
            'pdf.required_without' => 'Please, choose a presentation file',
            'pdf.mimes' => 'Please, choose a PDF file',
        ];
    }
}
