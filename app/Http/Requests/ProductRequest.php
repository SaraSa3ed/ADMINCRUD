<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to make this request
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'main_image' => 'required|file',
            'image.*' => 'required|file',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}
