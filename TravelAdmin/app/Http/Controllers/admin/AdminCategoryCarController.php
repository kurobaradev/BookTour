<?php

namespace App\Http\Controllers\admin;

use App\Components\Secusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\CategoryCars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminCategoryCarController extends Controller
{
    private $categorycars;
    public function __construct(CategoryCars $categorycars)
    {
        $this->categorycars = $categorycars;
    }
    public function index()
    {
        $categorycars = $this->categorycars->all();
        return view('admin.pages.categorycar.index', compact('categorycars'));
    }

    public function getCategoryCar($parentId)
    {
        $data = $this->categorycars->all();
        $secusive = new Secusive($data);
        $htmlOption = $secusive->Secusive($parentId);
        return $htmlOption;
    }
    public function create()
    {
        $htmlOption = $this->getCategoryCar($parentId = '');
        return view('admin.pages.categorycar.add', compact('htmlOption'));
    }
    public function store(CarRequest $request)
    {
        $this->categorycars->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ]);
        session()->flash('success', 'tạo thành công !.');
        return redirect(route('categorycar.index'));
    }
    public function edit($parent_id)
    {
        $categorycars = $this->categorycars->find($parent_id);
        $htmlOption = $this->getCategoryCar($categorycars->parent_id);
        return view('admin.pages.categorycar.edit', compact('categorycars', 'htmlOption'));
    }
    public function update($id, Request $request)
    {
        $this->categorycars->find($id)->update(
            [
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->name)
            ]
        );
        session()->flash('success', 'Cập nhật thành công !.');
        return redirect(route('categorycar.index'));
    }
    public function delete($id)
    {
        try {
            $this->categorycars->find($id)->delete();
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
