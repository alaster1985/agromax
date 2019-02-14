<?php

namespace App\Http\Requests;

use App\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LanguageStoreRequest extends FormRequest
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
        $languageCodes = Language::all()->pluck('code')->all();
        return [
            'name' => 'required|max:100|min:3',
            'code' => [
                'required',
                Rule::in($languageCodes),
            ],
            'disable' => 'required|boolean',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please, set language name',
            'name.max' => 'Shorter please, max 100 characters',
            'name.min' => 'Very short language name. At least 3 characters',
            'code.required' => 'Please, use correct code',
            'code.in' => 'Nice try BRO ;) But use correct code',
            'disable.required' => 'Please, disable attribute',
            'disable.boolean' => 'Nice try BRO ;) But use only boolean',
        ];
    }
}
