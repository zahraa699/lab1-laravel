<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexcontrol extends Controller
{
    public $product=[
        1=>['id'=>'1','name'=>'icecrame','price'=>'60l.E'],
        2=>['id'=>'2','name'=>'ice','price'=>'70l.E'],
        3=>['id'=>'3','name'=>'icetea','price'=>'80l.E'],
        4=>['id'=>'4','name'=>'icevilla','price'=>'90l.E'],
        5=>['id'=>'5','name'=>'icechocalte','price'=>'100l.E'],
        6=>['id'=>'6','name'=>'suger','price'=>'40l.E'],
        7=>['id'=>'7','name'=>'candy','price'=>'30l.E'],
        8=>['id'=>'8','name'=>'juice','price'=>'20l.E'],
        9=>['id'=>'9','name'=>'carmal','price'=>'160l.E'],
        10=>['id'=>'10','name'=>'icecoffe','price'=>'360l.E'],
        11=>['id'=>'11','name'=>'icemoca','price'=>'600l.E'],
        12=>['id'=>'12','name'=>'milkcheck','price'=>'630l.E']];
    public function category(){
        $catgory=['phone','watches','sports_wear','other'];
        

        return view('index',['catdetails'=>$catgory ,'products'=>$this->product]);
        // return view('index');

    }
    public function productdetails($id){
        return view('product-details',['products'=>$this->product[$id]]);

    }
    

}
