<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class CategoryApiController extends Controller
{
       public function index(){
           return Category::all();
       }   
    
       public function detail($id){
        return Category::find($id);
      }

       public function create(){
           $category = new Category;
           $category->name = request()->name;
           $category->save();

           return $category;
       }
       
       public function update($id){
           $category = Category::find($id);
           $category->name = request()->name;
           $category->save();
           return $category;
       }
       public function delete($id){
           $category = Category::find($id);
           $category->delete();
           return $category;
       }
}

