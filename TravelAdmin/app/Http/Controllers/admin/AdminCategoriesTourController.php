<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Components\Secusive;
use App\Http\Controllers\Controller;
use App\Models\CategoriesTour;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminCategoriesTourController extends Controller
{
    private $categoriestour;
    public function __construct(CategoriesTour $categoriestour)
    {
        $this->categoriestour= $categoriestour;
    }
    public function index()
    {
        $categoriestour = $this->categoriestour->all();
        return view('admin.pages.categoriestour.index',compact('categoriestour'));
    }

    public function getCategoriesTour($parentId){
        $data = $this->categoriestour->all();
        $secusive = new Secusive($data);
        $htmlOption = $secusive->Secusive($parentId);
        return $htmlOption;
    }
    public function create()
    {
        $htmlOption = $this->getCategoriesTour($parentId='');
        return view('admin.pages.categoriestour.add', compact('htmlOption'));
    }
    public function store(Request $request){
        $this->categoriestour->create([
            'name'=> $request->name,
            'parent_id' => $request -> parent_id,
            'slug'=> Str::slug($request->name)
        ]);
        return redirect(route('categoriestour.index'));
    }
    public function edit($parent_id){
        $categoriestour = $this->categoriestour->find($parent_id);
        $htmlOption = $this->getCategoriesTour($categoriestour->parent_id);
        return view('admin.pages.categoriestour.edit', compact('categoriestour','htmlOption'));
    }
    public function update($id, Request $request){
        $this->categoriestour->find($id)->update(
            [
                'name'=> $request->name,
                'parent_id' => $request -> parent_id,
                'slug'=> Str::slug($request->name)
            ]
        );
        return redirect(route('categoriestour.index'));
    }
    public function delete($id){
        try {
            $this->categoriestour->find($id)->delete();
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
