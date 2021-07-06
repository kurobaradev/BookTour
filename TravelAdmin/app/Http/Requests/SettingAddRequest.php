<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingAddRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'config_key' => 'bail|required|unique:settings|max:255',
            'config_value' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'config_key.required' => 'Tên không được phép để trống',
            'config_key.unique' => 'Tên không được phép trùng',
            'config_key.max' => 'Tên không được phép quá 255 kí tự',
            'config_value.required' => 'Mô tả không được phép để trống',
        ];
    }
}
