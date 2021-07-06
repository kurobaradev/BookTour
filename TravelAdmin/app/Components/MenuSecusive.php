<?php
namespace App\Components;

use App\Models\Menu;

class MenuSecusive {
    
    private $html;

    public function __construct()
    {
        $this->html='';
    }
    public function menuRecusiveAdd($parentId= 0, $subMark=''){
        $data = Menu::where('parent_id',$parentId)->get();
        foreach ($data as $dataitem){
            $this->html.=  "<option value ='". $dataitem->id."'> ".$subMark. $dataitem->name."</option> ";
            $this->menuRecusiveAdd($dataitem->id,$subMark .'-');
        }
        return $this->html;
    }
    public function menuRecusiveEdit($parentIdMenuEdit,$parentId= 0, $subMark=''){
        $data = Menu::where('parent_id',$parentId)->get();
        foreach ($data as $dataitem){
            if ($parentIdMenuEdit == $dataitem->id) {
                $this->html.=  "<option selected value ='". $dataitem->id."'> ".$subMark. $dataitem->name."</option> ";
            } else {
                $this->html.=  "<option value ='". $dataitem->id."'> ".$subMark. $dataitem->name."</option> ";
            }
            $this->menuRecusiveEdit($parentIdMenuEdit, $dataitem->id,$subMark .'-');
        }
        return $this->html;
    }
}