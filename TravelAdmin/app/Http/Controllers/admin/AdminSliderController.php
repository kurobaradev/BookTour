<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminSliderController extends Controller
{
    use StorageImageTrait;
    private $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }
    public function index()
    {
        $slider = $this->slider->all();
        $sliders = $this->slider->all();

        return view('admin.pages.slider.index', compact('slider', 'sliders'));
    }
    public function store(Request $request)
    {
        // $path = $request->file('image_path')->storeAs('tour');
        try {
            DB::beginTransaction();
            $dataUploadfeatureImage = $this->StorageImageUpload($request, 'image_path', 'sliders');
            if (!empty($dataUploadfeatureImage)) {
                $dataSliderCreate['image_name'] = $dataUploadfeatureImage['file_name'];
                $dataSliderCreate['image_path'] = $dataUploadfeatureImage['file_path'];
            }
            // dd($dataSliderCreate);
            $this->slider->create($dataSliderCreate);
            DB::commit();
            return redirect(route('slider.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:" . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }
    public function delete($id)
    {
        $this->slider->find($id)->delete();
        return redirect()->route('slider.index');
    }
}
