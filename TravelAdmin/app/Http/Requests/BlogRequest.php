<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title'=>'required',
            'content'=>'required',
            'category_blog_id'=>'required',
            'feature_image_path'=>'required',
            'description'=>'required|max:191'

        ];
    }
    
    public function messages()
    {
        return [
            'title.required'=>'Tiêu đề không được để trống',
            'content.required'=>'Nội dung không được để trống',
            'category_blog_id.required'=>'Danh mục không được để trống',
            'feature_image_path.required'=>'Hình ảnh không được để trống',
            'description.required'=>'Mô tả không được để trống',
            'description.max'=>' Mô tả Không được quá 191 từ'
        ];
    }
}
