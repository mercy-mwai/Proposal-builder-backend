<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
   
    public function index(){
        $templates= Template::all();
        $groupedCategory= $templates->groupBy('category');

        return response()->json([
            'success'=>true,
            'categories'=>Template::distinct('category')->pluck('category'),
            'templates'=>$groupedCategory
        ]);
    }

    public function getByCategory($category){
        $templates= Template::where('category', $category)->get();
       
        return response()->json([
            'category'=>$category,
            'templates'=>$templates
        ]);

    }
    public function getbyId($id){
        $template=Template::find($id);
      
        if(!$template){
            return response()->json([
                'error'=>'Template not found']
                ,400);
        }

        return response()->json([
            'success'=>true,
            'template'=>$template
            
        ]);
    }
    
} 
