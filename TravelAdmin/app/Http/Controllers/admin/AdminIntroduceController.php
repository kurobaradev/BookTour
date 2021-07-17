<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Introduce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminIntroduceController extends Controller
{
    private $introduce;
    public function __construct(Introduce $introduce)
    {
        $this->introduce = $introduce;
    }
    public function index($id = 1)
    {
        $introduce = $this->introduce->find($id);

        return view('admin.pages.about.index', compact('introduce'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $dataIntroduceUpdate = [
                'name_company' => $request->name_company,
                'content' => $request->content,
            ];
            $this->introduce->find($id)->update($dataIntroduceUpdate);
            $introduce = $this->introduce->find($id);
            DB::commit();
            return redirect(route('introduce.index'));
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message:" . $exception->getMessage() . 'Line' . $exception->getLine());
        }
    }
}
