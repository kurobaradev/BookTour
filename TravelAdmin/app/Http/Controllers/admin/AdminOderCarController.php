<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Oder_Car;
// use App\Models\OderCar;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class AdminOderCarController extends Controller
{
    private $cars;
    public function __construct(Oder_Car $cars)
    {
        $this->cars = $cars;
    }
    public function index()
    {
      
        $cars = $this->cars->latest()->get();
        return view('admin.pages.odercar.index', compact('cars'));
    }
    public function update($id)
    {
        $this->cars->find($id)->update(
            [
                'status' => 1,
            ]
        );
        session()->flash('success', 'Cập nhật thành công !.');
        return redirect(route('odercar.index'));
    }
    public function pdf($id) 
{
    $cars = Oder_Car::find($id);
    $data = [
        'chitietcar' => $cars
    ];

    /* Code dành cho việc debug
    - Khi debug cần hiển thị view để xem trước khi Export PDF
    */
    // return view('admin.pages.oder.pdf',compact('Oders'));
        // ->with('chitiettour', $data);
    // return view('admin.pages.oder.pdf')
    //     ->with('chitiettour', $Oders);
    //     ->with('danhsachloai', $ds_loai);
    
    $pdf = PDF::loadView('admin.pages.odercar.pdf', $data);
    return $pdf->download('pdfcar.pdf');
}
}