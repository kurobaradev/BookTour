<?php
namespace App\Components;

use App\Models\CategoriesTour;

class Secusive {
    private $data;
    private $htmlSelect= '';

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function Secusive($parentId, $id = 0 , $text=""){
        foreach ($this->data as $value){
            if ($value['parent_id']== $id) {
                if (!empty($parentId) && $parentId == $value['id']) {
                    $this->htmlSelect.= "<option selected value ='". $value['id']."'> ".$text. $value['name']."</option> ";
                }
                else{
                    $this->htmlSelect.= "<option value ='". $value['id']."'> ".$text. $value['name']."</option> ";
                }
                $this->Secusive($parentId, $value['id'],$text.'-');
            }   
        }
        return $this->htmlSelect;
    }
}