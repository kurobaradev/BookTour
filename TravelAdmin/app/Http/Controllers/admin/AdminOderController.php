<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\oder;
use Illuminate\Http\Request;
use App\Mail\Mailodertour;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;



class AdminOderController extends Controller
{
    private $oders;
    public function __construct(oder $oders)
    {
        $this->oders = $oders;
    }
    public function index()
    {
      
        $oders = $this->oders->latest()->get();
        return view('admin.pages.oder.index', compact('oders'));
    }
    public function update($id)
    {
        $this->oders->find($id)->update(
            [
                'status' => 1,
            ]
        );
        session()->flash('success', 'Cập nhật thành công !.');
        return redirect(route('oder.index'));
    }
    public function pdf($id) 
{
    $Oders = oder::find($id);
    $data = [
        'chitiettour' => $Oders
    ];

    /* Code dành cho việc debug
    - Khi debug cần hiển thị view để xem trước khi Export PDF
    */
    // return view('admin.pages.oder.pdf',compact('Oders'));
        // ->with('chitiettour', $data);
    // return view('admin.pages.oder.pdf')
    //     ->with('chitiettour', $Oders);
    //     ->with('danhsachloai', $ds_loai);
    
    $pdf = PDF::loadView('admin.pages.oder.pdf', $data);
    return $pdf->download('pdftour.pdf');
}
    

    
}
