<?php

namespace App\Http\Controllers\Admin\Categorie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index (){
        $page = "CategorieS"; 
        return view('admin.categorie.categorie',compact('page'));
    }
}
