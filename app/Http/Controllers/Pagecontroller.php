<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    function home(){
        return view("home");
    }
    function product(){
        $products = array();
        for($i = 1; $i<=15; $i++){
            $product = array(
                "name"=>"product $i",
                "id"=>$i
            );
            $products[]=(object)$product;
        }
        return view('product')
        ->with('products',$products);
    }
    function team(){
        $teams = array();
        for($i = 1; $i<=15; $i++){
            $team = array(
                "name"=>"Name $i",
                "id"=>$i
            );
            $teams[] =(object)$team; 
        }
        return view('team')
                ->with('teams',$teams);
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
}
