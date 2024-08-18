<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Tag;


class TagController extends Controller
{
    public function index(){
    
         $tags=Tag::all();

        return view('tags.index',[
            'tags'=>$tags
            ]);

    }
    public function create(){
        return view('tags.create');

    }

  
    public function store(){
        // validation...
            request()->validate([
                'name_ar' => ['required'],
                'name_en' => ['required'],
           
            ]);
            
            Tag::create([
                'name_ar' => request('name_ar'),
                'name_en'=>request('name_en'),
                
                
            ]);

        return redirect('/tags');
        
    }
    public function edit(Tag $tag){
        return view('tags.edit', ['tag' => $tag]);

        
    }
    public function update(Tag $tag){
        request()->validate([
            'name_ar' => ['required'],
            'name_en' => ['required'],
       
        ]);
        
        Tag::create([
            'name_ar' => request('name_ar'),
            'name_en'=>request('name_en'),
            
            
        ]);
        return redirect('/tags' );
    }    
    public function destroy(Tag $tag){
        
            //delete
            $tag->delete();
            //redirect
            return redirect('/tags');
        
    }



}