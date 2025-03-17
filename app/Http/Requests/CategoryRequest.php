<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to make this request
    }

    public function rules()
    {
        return [
            'main_cat' => 'required|string',
            'sub_cat' => 'required|string',
            'name' => 'required|string',
        ];
    }
}