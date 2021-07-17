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

    public function getCategoriesTour($parentId)
    {
        $data = $this->category_tour_id->all();
        $secusive = new Secusive($data);
        $htmlOption = $secusive->Secusive($parentId);
        return $htmlOption;
    }
    public function create()
    {
        $htmlOption = $this->getCategoriesTour($parentId = '');
        return view('admin.pages.tour.add', compact('htmlOption'));
    }
    public function store(Request $request)
    {
        // $path = $request->file('feature_image_path')->storeAs('tour');
        try {
            DB::beginTransaction();
            $dataTourCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->content,
                'duration' => $request->duration,
                'departed' => $request->departed,
                'description' => $request->description,
                'category_tour_id' => $request->category_tour_id,
                'user_id' => auth()->id(),
            ];
            $dataUploadfeatureImage = $this->StorageImageUpload($request, 'feature_image_path', 'tours');
            if (!empty($dataUploadfeatureImage)) {
                $dataTourCreate['feature_image_name'] = $dataUploadfeatureImage['file_name'];
                $dataTourCreate['feature_image_path'] = $dataUploadfeatureImage['file_path'];
            }
            // dd($dataTourCreate);
            $this->tour->create($dataTourCreate);
            DB::commit();
            return redirect(route('tour.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:" . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }

    public function edit($id)
    {

        $tour = $this->tour->find($id);
        $htmlOption = $this->getCategoriesTour($tour->category_tour_id);

        return view('admin.pages.tour.edit', compact('htmlOption', 'tour'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataTourUpdate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->content,
                'duration' => $request->duration,
                'departed' => $request->departed,
                'description' => $request->description,
                'category_tour_id' => $request->category_tour_id,
                'user_id' => auth()->id(),
            ];
            $dataUploadfeatureImage = $this->StorageImageUpload($request, 'feature_image_path', 'tours');
            if (!empty($dataUploadfeatureImage)) {
                $dataTourUpdate['feature_image_name'] = $dataUploadfeatureImage['file_name'];
                $dataTourUpdate['feature_image_path'] = $dataUploadfeatureImage['file_path'];
            }

            $this->tour->find($id)->update($dataTourUpdate);
            $tour = $this->tour->find($id);
            DB::commit();
            return redirect(route('tour.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:" . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }
    public function delete($id)
    {
        try {
            $this->tour->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        } catch (\Exception $exception) {
            Log::error("message:" . $exception->getMessage() . 'Line' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
}
