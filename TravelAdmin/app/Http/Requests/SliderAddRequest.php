<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderAddRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'image_path' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được phép để trống',
            'name.unique' => 'Tên không được phép trùng',
            'name.max' => 'Tên không được phép quá 255 kí tự',
            'name.min' => 'Tên không được phép dưới 10 kí tự',
            'description.required' => 'Mô tả không được phép để trống',
            'description.max' => 'Mô tả không được phép quá 255 kí tự',
            'description.min' => 'Mô tả không được phép dưới 10 kí tự',
            'image_path.required' => 'Ảnh không được phép để trống',
        ];
    }
}
