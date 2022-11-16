<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\crud;

class CrudController extends Controller
{
    //

    public  function gotowel(){
        return view('welcome');
    }

    public function display()
    {
        return view('display',['list'=>crud::all()]);
    }

    public function saveitem(Request $req){

        $itemObj=new crud();
        $itemObj->batchno=$req->batchno;
        $itemObj->quantity=$req->quantity;
        $itemObj->status=$req->status;
        $itemObj->remark=$req->remark;

        $itemObj->save();
        return redirect('/');
    }

    public function delete($id){
        $data=crud::find($id);
        $data->delete();
        return redirect('/');
    }
    public function edit($id){
        $data=crud::find($id);
        return view('edit',['data'=>$data]);
    }
    public function updatelist(Request $req){

        $itemObj=crud::find($req->id);
        $itemObj->batchno=$req->batchno;
        $itemObj->quantity=$req->quantity;
        $itemObj->status=$req->status;
        $itemObj->remark=$req->remark;

        $itemObj->save();
        return redirect('/');
    }
}
