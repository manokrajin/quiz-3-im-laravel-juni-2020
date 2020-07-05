<?php

namespace App\Http\Controllers;
use App\Models\articlemodel;
use Illuminate\Http\Request;

class articleControl extends Controller
{
    public function image(){
        return view('image');
    }
    public function show(){
        $article= articlemodel::getall();
        return view('article', compact('article'));
    }
    public function create(){
        return view('form');
    }
    public function showdata($id){
        $article= articlemodel::findbyid($id);
        return view('articleshow', compact('article'));

    }

    public function store(Request $request){

                $data = $request->all();

                unset($data["_token"]);
                $slugAwal = strtolower($data['name']);
                $slugArray = explode(" ",$slugAwal);
                $slug = join("-",$slugArray);
                $data['slug'] = $slug;
                articlemodel::save($data);
                return redirect('/article');
    }
}
