<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;



class DataController extends Controller
{
    public function index(){
       // $job=Job::with('employer')->paginate(4);
        $data=Data::with('tags')->paginate(15);
    
        return view('data.index',[
            'datasets'=>$data
            ]);
    }
    public function create(){
        $tags=Tag::all();
        return view('data.create',['tags'=>$tags]);

    }
    public function show(Data $data){
        return view('data.show', ['data' => $data]);

    }

    public function store(){
        // validation...

         $validatedData = request()->validate([
                'name_ar' => ['required'],
                'name_en' => ['required'],
                'describe_ar' => ['required'],
                'describe_en' => ['required'],
                'update' => ['required'],
                'status' => ['required'],
                'tags' => ['required'], 
                'tags.*' => ['exists:tags,id'],
        
            ]);
            
            $data = Data::create([
                'name_ar' => request('name_ar'),
                'name_en'=>request('name_en'),
                'describe_ar'=>request('describe_ar'),
                'describe_en'=>request('describe_en'),
                'update'=>request('update'),
                'status'=>request('status'),
                'user_id'=>Auth::id(),
              
                
            ]);
        $data->tags()->attach($validatedData['tags']);

        return redirect('/data');
        
        
    }
    public function edit(Data $data){
        Gate::authorize('edit', $data);
        $tags=Tag::all();
        


        return view('data.edit', ['data' => $data,'tags'=>$tags]);

        
    }
    public function update(Data $data){

        Gate::authorize('edit', $data);

        $validatedData = request()->validate([
            'name_ar' => ['required'],
            'name_en' => ['required'],
            'describe_ar' => ['required'],
            'describe_en' => ['required'],
            'update' => ['required'],
            'status' => ['required'],
            'tags' => ['required'], 
            'tags.*' => ['exists:tags,id'],
        ]);
        
       $data->update([
            'name_ar' => request('name_ar'),
            'name_en'=>request('name_en'),
            'describe_ar'=>request('describe_ar'),
            'describe_en'=>request('describe_en'),
            'update'=>request('update'),
            'status'=>request('status'),
        ]);
        $data->tags()->sync($validatedData['tags']);
        return redirect('/data/' . $data->id);
    }    
    public function destroy(Data $data){
        
        
            Gate::authorize('edit', $data);
            $data->delete();
            //redirect
            return redirect('/data');
        
    }



}