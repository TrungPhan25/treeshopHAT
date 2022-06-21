<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui Lòng Nhập Tên Danh Mục',

        ];
    }
}
