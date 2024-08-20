<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// Imports Models
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    // This method will show permissions page
    public function index(){
        return view('permissions.list');
    }

    // This method will create permissions page
    public function create(){
        return view('permissions.create');
    }

    // This method will store permission in DB
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:permissions|min:3'
        ]);
        // ye hum ne validation ki h k required b ho, or unique b ho permissions wale table m, or min length 3 ho.
        if($validator->passes()){
            Permission::create(['name' => $request->name]);
            return redirect()->route('permissions.index')->with('success','Permission Added Successfully.');
        }else{
            return redirect()->route('permissions.create')->withInput()->withErrors($validator);
        }
        // Agr if condition validator pass ho jae jo hum ne bnai h $validator nam se to DB m create kr do, or phr route ko redirect kr do or phr success ka msg session m ly jao. 
    }

    // This method will show edit permission Page
    public function edit(){

    }

    // This method will update a permissions 
    public function update(){
        
    }

    // This method will delete a permission in DB
    public function destroy(){
        
    }
}
