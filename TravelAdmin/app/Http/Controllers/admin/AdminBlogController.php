<?php

namespace App\Http\Controllers\admin;

use App\Components\Secusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blogs;
use App\Models\CategoryBlogs;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminBlogController extends Controller
{
    use StorageImageTrait;
    private $category_blog_id;
    private $blogs;
    public function __construct(CategoryBlogs $category_blog_id, Blogs $blogs)
    {
        $this->category_blog_id = $category_blog_id;
        $this->blogs = $blogs;
    }
    public function index()
    {
        $blogs = $this->blogs->all();
        // $htmlOption = $this->getCategoryBlog($blogs->category_blog_id);
        return view('admin.pages.blog.index', compact('blogs'));
    }

    public function getCategoryBlog($parentId)
    {
        $data = $this->category_blog_id->all();
        $secusive = new Secusive($data);
        $htmlOption = $secusive->Secusive($parentId);
        return $htmlOption;
    }
    public function create()
    {
        $htmlOption = $this->getCategoryBlog($parentId = '');
        return view('admin.pages.blog.add', compact('htmlOption'));
    }
    public function store(BlogRequest $request)
    {
        // $path = $request->file('feature_image_path')->storeAs('tour');
        try {
            DB::beginTransaction();
            $dataBlogCreate = [
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->content,
                'category_blog_id' => $request->category_blog_id,
                'status' => 0,
                'user_id' => auth()->id(),
            ];
            $dataUploadfeatureImage = $this->StorageImageUpload($request, 'feature_image_path', 'blogs');
            if (!empty($dataUploadfeatureImage)) {
                $dataBlogCreate['feature_image_name'] = $dataUploadfeatureImage['file_name'];
                $dataBlogCreate['feature_image_path'] = $dataUploadfeatureImage['file_path'];
            }
            // dd($dataBlogCreate);
            $this->blogs->create($dataBlogCreate);
            DB::commit();
            return redirect(route('blog.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:" . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }

    public function edit($id)
    {

        $blogs = $this->blogs->find($id);
        $htmlOption = $this->getCategoryBlog($blogs->category_blog_id);

        return view('admin.pages.blog.edit', compact('htmlOption', 'blogs'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataBlogUpdate = [
                'title' => $request->title,
                'description' => $request->description,
                'content' => $request->content,
                'category_blog_id' => $request->category_blog_id,
                'status' => 0,
                'user_id' => auth()->id(),
            ];
            $dataUploadfeatureImage = $this->StorageImageUpload($request, 'feature_image_path', 'blogs');
            if (!empty($dataUploadfeatureImage)) {
                $dataBlogUpdate['feature_image_name'] = $dataUploadfeatureImage['file_name'];
                $dataBlogUpdate['feature_image_path'] = $dataUploadfeatureImage['file_path'];
            }

            $this->blogs->find($id)->update($dataBlogUpdate);
            $blogs = $this->blogs->find($id);
            DB::commit();
            return redirect(route('blog.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:" . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }
    public function delete($id)
    {
        try {
            $this->blogs->find($id)->delete();
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
