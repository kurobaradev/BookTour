<?php

namespace App\Http\Controllers\admin;

use App\Components\Secusive;
use App\Http\Controllers\Controller;
use App\Models\CategoryBlogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminCategoryBlogController extends Controller
{
    private $categoryblogs;
    public function __construct(CategoryBlogs $categoryblogs)
    {
        $this->categoryblogs = $categoryblogs;
    }
    public function index()
    {
        $categoryblogs = $this->categoryblogs->all();
        return view('admin.pages.categoryblog.index', compact('categoryblogs'));
    }

    public function getCategoryBlog($parentId)
    {
        $data = $this->categoryblogs->all();
        $secusive = new Secusive($data);
        $htmlOption = $secusive->Secusive($parentId);
        return $htmlOption;
    }
    public function create()
    {
        $htmlOption = $this->getCategoryBlog($parentId = '');
        return view('admin.pages.categoryblog.add', compact('htmlOption'));
    }
    public function store(Request $request)
    {
        $this->categoryblogs->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ]);
        return redirect(route('categorycar.index'));
    }
    public function edit($parent_id)
    {
        $categoryblogs = $this->categoryblogs->find($parent_id);
        $htmlOption = $this->getCategoryCar($categoryblogs->parent_id);
        return view('admin.pages.categoryblog.edit', compact('categoryblogs', 'htmlOption'));
    }
    public function update($id, Request $request)
    {
        $this->categoryblogs->find($id)->update(
            [
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'slug' => Str::slug($request->name)
            ]
        );
        return redirect(route('categoryblog.index'));
    }
    public function delete($id)
    {
        try {
            $this->categoryblogs->find($id)->delete();
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
