<?php
namespace App\Http\Controllers\admin;

use App\Components\Secusive;
use App\Http\Controllers\Controller;
use App\Models\Cars;
use App\Models\CategoryCars;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminCarController extends Controller
{
    use StorageImageTrait;
    private $category_car_id;
    private $cars;
    public function __construct(CategoryCars $category_car_id, Cars $cars)
    {
        $this->category_car_id = $category_car_id;
        $this->cars = $cars;

    }
    public function index()
    {
        $cars = $this->cars->all(); 
        return view('admin.pages.car.index', compact('cars'));
    }

    public function getCategoryCar($parentId){
        $data = $this->category_car_id->all();
        $secusive = new Secusive($data);
        $htmlOption = $secusive->Secusive($parentId);
        return $htmlOption;
    }
    public function create()
    {
        $htmlOption = $this->getCategoryCar($parentId='');
        return view('admin.pages.car.add', compact('htmlOption'));
    }
    public function store(Request $request)
    {
        // $path = $request->file('feature_image_path')->storeAs('tour');
        try {
            DB::beginTransaction();
            $dataCarCreate = [
                'name'=>$request->name,
                'price'=>$request->price,
                'content'=>$request->content,
                'category_car_id'=>$request->category_car_id,
                'status'=> 0,
                'user_id'=>auth()->id(),   
            ];
            $dataUploadfeatureImage=$this->StorageImageUpload($request, 'feature_image_path','cars');
            if (!empty($dataUploadfeatureImage)) {
                $dataCarCreate['feature_image_name']=$dataUploadfeatureImage['file_name'];
                $dataCarCreate['feature_image_path']=$dataUploadfeatureImage['file_path'];
            }
            // dd($dataCarCreate);
            $this->cars->create($dataCarCreate);
            DB::commit();
            return redirect(route('car.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:".$exception->getMessage().'Line'.$exception->getLine());
        }
      
    }

    public function edit($id)
    {
       
        $cars = $this->cars->find($id);
        $htmlOption = $this->getCategoryCar($cars->category_car_id);
        
        return view('admin.pages.car.edit', compact('htmlOption','cars'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataCarUpdate = [
                'name'=>$request->name,
                'price'=>$request->price,
                'content'=>$request->content,
                'category_car_id'=>$request->category_car_id,
                'status'=> 0,
                'user_id'=>auth()->id(),   
            ];
            $dataUploadfeatureImage=$this->StorageImageUpload($request, 'feature_image_path','cars');
            if (!empty($dataUploadfeatureImage)) {
                $dataCarUpdate['feature_image_name']=$dataUploadfeatureImage['file_name'];
                $dataCarUpdate['feature_image_path']=$dataUploadfeatureImage['file_path'];
            }
            
            $this->cars->find($id)->update($dataCarUpdate);
            $cars = $this->cars->find($id);
            DB::commit();
            return redirect(route('car.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:".$exception->getMessage().'Line'.$exception->getLine());
        }
    }
    public function delete($id){
        try {
            $this->cars->find($id)->delete();
            return response()->json([
                'code'=> 200,
                'message'=>'success'
            ], 200);
        }catch (\Exception $exception) {
            Log::error("message:".$exception->getMessage().'Line'.$exception->getLine());
            return response()->json([
                'code'=> 500,
                'message'=>'fail'
            ], 500);
        }
    }
}
