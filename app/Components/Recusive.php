<?php
namespace  App\Components;
use App\Models\Category;

class Recusive{
    private  $data;
    private $htmlSelect = '';
    public function _construct($data){
        $this ->data = $data;
    }
     public function CategoryRecusive($id = 0,$text = ''){
        $data = Category::all();
        foreach ($data as $value){
            if ($value ['parent_id'] == $id){
                $this->htmlSelect .= "<option>" . $text.$value['name']. "</option>";
                $this -> CategoryRecusive($value['id'],$text.'--');
            }}
        return $this -> htmlSelect;
    }
}
