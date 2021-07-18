<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\oder;
use Illuminate\Http\Request;

use App\Mail\Mailodertour;
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
        $oders = $this->oders->find($id);
        $dataOderUpdate= [
            'user_id'=> $oders->user_id,
            'user_name'=> $oders->user_name,
            'user_mail'=> $oders->user_mail,
            'departed'=> $oders->departed,
            'duration'=> $oders->duration,
            'tour_name'=> $oders->tour_name,
            'tour_id'=> $oders->tour_id,
            'Nguoilon'=> $oders->Nguoilon,
            'treem'=> $oders->treem,
            'price_car'=> $oders->price_car,
            'price'=> $oders->price,
            'phone'=> $oders->phone,
            'status'=> 1

        ];
        $this->oders->find($id)->update($dataOderUpdate);
        return view('admin.pages.oder.index', compact('oders'));
    }

    
}
