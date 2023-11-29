<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;
use Session;

class inventorycontroller extends Controller
{
    public function ReadData(){
        $ReadData = products::all();
        return view ('read_data',compact('ReadData'));
    }
    public function addData(){
        return view ('add_data');
    }
    public function storeData(Request $request){
        $rules =[
            'name'=>'required|max:100',
            'quantity'=>'required|max:8',
            'price'=>'required|max:15', 
        ];
        $this->validate($request,$rules);
        $product= new products();
        $product->Name = $request->name;
        $product->Quantity = $request->quantity;
        $product->Price = $request->price;
        $product->save();
        Session::flash('msg','Succesfully Added');
        return redirect('/');
    }
    public function updateData($id=null){
        $updateData=products::find($id);
        return view('update_data',compact('updateData'));
    }
    public function storeUpdateData(Request $request){
        $rules =[
            'name'=>'required|max:100',
            'quantity'=>'required|max:8',
            'price'=>'required|max:15', 
        ];
        $this->validate($request, $rules);
        $product=products::find($request->id);
        $product->Name = $request->name;
        $product->Quantity = $request->quantity;
        $product->Price = $request->price;
        $product->save();
        Session::flash('msg','Succesfully Updated');
        return redirect('/');
    }

    public function deleteData($id=null){
        $deleteData=products::find($id);
        $deleteData->delete();
        Session::flash('msg','Data Successfully Deleted');
        return redirect('/');
    }
}
