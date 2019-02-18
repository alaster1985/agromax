<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ExclusiveLotRequest extends FormRequest
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
        $products = DB::table('products')->get(['id'])->pluck('id')->toArray();
        $deliveries = DB::table('deliveries')->get(['id'])->pluck('id')->toArray();
        $conditions = DB::table('conditions')->where('id', '<>', 1)->get(['id'])->pluck('id')->toArray();
        return [
            'product' => [
                'required',
                Rule::in($products),
            ],
            'otherName' => 'nullable|required_if:product,1|min:3|max:25',
            'delivery' => [
                'required',
                Rule::in($deliveries),
            ],
            'condition' => [
                'required',
                Rule::in($conditions),
            ],
            'port' => 'required|max:100|min:5',
            'amount' => 'required|integer|max:10000|min:10',
            'optional' => 'required|integer|max:100000|min:100',
            'max' => 'required|integer|max:1000000|min:100',
        ];
    }

    public function messages()
    {
        return [
            'product.required' => 'Please, select the product',
            'product.in' => 'Nice try BRO ;) But set product from this select',
            'otherName.required_if' => 'Please, set other name of product',
            'otherName.min' => 'Very short other name of product. At least 3 characters',
            'otherName.max' => 'Shorter please, max 25 characters',
            'delivery.required' => 'Please, select the Incoterms',
            'delivery.in' => 'Nice try BRO ;) But set Incoterms from this select',
            'condition.required' => 'Please, select the Condition',
            'condition.in' => 'Nice try BRO ;) But set Condition from this select',
            'port.required' => 'Please, set port',
            'port.max' => 'Shorter please, max 100 characters',
            'port.min' => 'Very short port name. At least 5 characters',
            'amount.required' => 'Please, set amount',
            'amount.integer' => 'Please, use only numbers for amount',
            'amount.max' => 'Seriously, over 10000 tons?',
            'amount.min' => 'It\'s not enough, set at least 10 tons',
            'optional.required' => 'Please, set optional price',
            'optional.integer' => 'Please, use only numbers for optional price',
            'optional.max' => 'Seriously, over 100000 $$?',
            'optional.min' => 'It\'s not enough, set at least 100 $$ for this product',
            'max.required' => 'Please, set max price',
            'max.integer' => 'Please, use only numbers for max price',
            'max.max' => 'Seriously, over 1000000 $$?',
            'max.min' => 'It\'s not enough, set at least 100 $$ for this product',
        ];
    }
}
