<?php

namespace App\Http\Controllers\admin;

use App\Components\Secusive;
use App\Http\Controllers\Controller;
use App\Models\CategoriesTour;
use App\Models\Tour;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminTourController extends Controller
{
    use StorageImageTrait;
    private $category_tour_id;
    private $tour;
    public function __construct(CategoriesTour $category_tour_id, Tour $tour)
    {
        $this->category_tour_id = $category_tour_id;
        $this->tour = $tour;

    }
    public function index()
    {
        $tours = $this->tour->all(); 
        return view('admin.pages.tour.index', compact('tours'));
    }

    public function getCategoriesTour($parentId){
        $data = $this->category_tour_id->all();
        $secusive = new Secusive($data);
        $htmlOption = $secusive->Secusive($parentId);
        return $htmlOption;
    }
    public function create()
    {
        $htmlOption = $this->getCategoriesTour($parentId='');
        return view('admin.pages.tour.add', compact('htmlOption'));
    }
    public function store(Request $request)
    {
        // $path = $request->file('feature_image_path')->storeAs('tour');
        try {
            DB::beginTransaction();
            $dataTourCreate = [
                'name'=>$request->name,
                'price'=>$request->price,
                'content'=>$request->content,
                'category_tour_id'=>$request->category_tour_id,
                'user_id'=>auth()->id(),   
            ];
            $dataUploadfeatureImage=$this->StorageImageUpload($request, 'feature_image_path','tours');
            if (!empty($dataUploadfeatureImage)) {
                $dataTourCreate['feature_image_name']=$dataUploadfeatureImage['file_name'];
                $dataTourCreate['feature_image_path']=$dataUploadfeatureImage['file_path'];
            }
            
            
            // dd($dataTourCreate);
            $this->tour->create($dataTourCreate);
            DB::commit();
            return redirect(route('tour.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:".$exception->getMessage().'Line'.$exception->getLine());
        }
      
    }
  
    
}

