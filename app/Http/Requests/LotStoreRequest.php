<?php

namespace App\Http\Requests;

use App\Category;
use App\Delivery;
use App\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LotStoreRequest extends FormRequest
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
        $productsId = Product::getProducts()->pluck('id')->all();
        $deliveriesId = Delivery::getDeliveries()->pluck('id')->all();
        $categoriesId = Category::getCategories()->pluck('id')->all();
        $productsId['new'] = 'new';
        return [
            'productId' => [
                'required_without:lot_id',
                Rule::in($productsId),
            ],
            'tons' => 'required|integer|max:10000|min:10',
            'price' => 'required|integer|max:100000|min:10',
            'port' => 'required|max:100|min:3',
            'port_photo' => 'required_without:lot_id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'delivery_id' => [
                'required',
                Rule::in($deliveriesId),
            ],
            'newProductName' => 'nullable|required_if:productId,new|max:25|min:3',
            'new_product_photo' => 'nullable|required_if:productId,new|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => [
                'nullable',
                'required_if:productId,new',
                Rule::in($categoriesId),
            ],
            'description_id.1' => 'nullable|required_if:productId,new|required_with:lot_id|max:10000',
            'description_id.2' => 'nullable|required_if:productId,new|required_with:lot_id|max:10000',
            'description_id.3' => 'nullable|required_if:productId,new|required_with:lot_id|max:10000',
            'description_id.4' => 'nullable|required_if:productId,new|required_with:lot_id|max:10000',
            'description_id.5' => 'nullable|required_if:productId,new|required_with:lot_id|max:10000',
            'description_id.6' => 'nullable|required_if:productId,new|required_with:lot_id|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'productId.required' => 'Please, select the product',
            'productId.in' => 'Nice try BRO ;) But set product from this select',
            'tons.required' => 'Please, set amount',
            'tons.integer' => 'Please, use only numbers for amount',
            'tons.max' => 'Seriously, over 10000 tons?',
            'tons.min' => 'It\'s not enough, set at least 10 tons',
            'price.required' => 'Please, set price',
            'price.integer' => 'Please, use only numbers for price',
            'price.max' => 'Seriously, over 100000 $$?',
            'price.min' => 'It\'s not enough, set at least 10 $$ for this lot',
            'port.required' => 'Please, set port name',
            'port.max' => 'Shorter please, max 100 characters',
            'port.min' => 'Very short port name. At least 3 characters',
            'port_photo.required' => 'Please, choose a photo for port',
            'port_photo.image' => 'It was not an image',
            'port_photo.mime' => 'Nice try! But It was not an image',
            'port_photo.max' => 'Please give some a little smaller picture. Max 2 Mb',
            'delivery_id.required' => 'Please, select the incoterms',
            'delivery_id.in' => 'Nice try BRO ;) But set incoterms from this select',
            'newProductName.required_if' => 'Please, set new product name',
            'newProductName.max' => 'Shorter please, max 100 characters',
            'newProductName.min' => 'Very short new product name. At least 3 characters',
            'new_product_photo.required_if' => 'Please, choose a photo for new product',
            'new_product_photo.image' => 'It was not an image',
            'new_product_photo.mime' => 'Nice try! But It was not an image',
            'new_product_photo.max' => 'Please give some a little smaller picture. Max 2 Mb',
            'category.required_if' => 'Please, select the category',
            'category.in' => 'Nice try BRO ;) But set category from this select',
            'description_id.1.required_if' => 'Please, set English description for this product',
            'description_id.1.required_with' => 'Please, set English description for this product',
            'description_id.1.max' => 'Shorter please, max 10000 characters (English description)',
            'description_id.2.required_if' => 'Please, set Germany description for this product',
            'description_id.2.required_with' => 'Please, set Germany description for this product',
            'description_id.2.max' => 'Shorter please, max 10000 characters (Germany description)',
            'description_id.3.required_if' => 'Please, set Turkey description for this product',
            'description_id.3.required_with' => 'Please, set Turkey description for this product',
            'description_id.3.max' => 'Shorter please, max 10000 characters (Turkey description)',
            'description_id.4.required_if' => 'Please, set Italy description for this product',
            'description_id.4.required_with' => 'Please, set Italy description for this product',
            'description_id.4.max' => 'Shorter please, max 10000 characters (Italy description)',
            'description_id.5.required_if' => 'Please, set France description for this product',
            'description_id.5.required_with' => 'Please, set France description for this product',
            'description_id.5.max' => 'Shorter please, max 10000 characters (France description)',
            'description_id.6.required_if' => 'Please, set Arabian description for this product',
            'description_id.6.required_with' => 'Please, set Arabian description for this product',
            'description_id.6.max' => 'Shorter please, max 10000 characters (Arabian description)',
        ];
    }
}
