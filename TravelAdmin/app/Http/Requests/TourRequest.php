<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required',
            'price' =>'required',
            'content'=>'required',
            'departed'=>'required',
            'duration'=>'required',
            'category_tour_id'=>'required',
            'feature_image_path'=>'required',
            'description'=>'required|max:191'

        ];
    }
    
    public function messages()
    {
        return [
            'name.required'=>'Tiêu đề không được để trống',
            'price.required'=>'Giá không được để trống',
            'departed.required'=>'Ngày khởi hành không được để trống',
            'duration.required'=>'Số ngày không được để trống',
            'content.required'=>'Nội dung không được để trống',
            'category_tour_id.required'=>'Danh mục không được để trống',
            'feature_image_path.required'=>'Hình ảnh không được để trống',
            'description.required'=>'Mô tả không được để trống',
            'description.max'=>' Mô tả Không được quá 191 từ'
        ];
    }
}
