<?php

namespace App\Http\Controllers\Admin\Categorie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
class CategorieController extends Controller
{
    public function index (){
        $page = "CategorieS";
        $categories  = Categorie::orderBy('id','DESC')->get();
        return view('admin.categorie.categorie',compact('page','categories'));
    }


    public function store (Request $request) {
        $request->validate([
            'categorie_name'=> 'required',
            'categorie_description'=>'required|max:30',
            'categorie_icon'=>'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

       
        if($request->categorie_icon){
            $imageName = time().'.'.$request->categorie_icon->extension();
            
            $request->categorie_icon->move(public_path('categorie_images'),$imageName);
            
            $data = [
              'categorie_name'=>$request->categorie_name,
              'categorie_description'=>$request->categorie_description,
              'categorie_icon'=>$imageName,
              'show_home_page'=>$request->show_home_page
            ];
            
            Categorie::insert($data);
            $notification=array('messege' => 'Category Inserted!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }



    }



    public function destroy ($id) {
        $categorie = Categorie::find($id);
        $image_path = public_path("\categorie_images/").$categorie->categorie_icon;
        if(file_exists($image_path)){
            @unlink($image_path);
            $categorie->delete();
            $notification=array('messege' => 'Category Deleted!', 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
       
    }



}
