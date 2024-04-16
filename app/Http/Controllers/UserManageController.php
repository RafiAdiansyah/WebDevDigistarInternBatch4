<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManageController extends Controller
{
     public function index(){
         $UserManage = User::all();
         return view('userManagement', compact("UserManage"));
     }
    public function show($id){
        $UserManage = User::findOrFail($id);
        return view('userManagement', compact("UserManage"));
    }
    public function destroy($id){
        $UserManage = User::findOrFail($id);
        $UserManage->delete();
       return redirect()->back();
    }
    public function edit($id){
        $UserManage = User::findOrFail($id);
        return view('userManagement', compact("UserManage"));
    }
    //update data
    public function update(Request $req, $id){
        $this->validate($req, [
        'sc_number' => 'required',
        'office_name' => 'required',
        'detail_end_cust' => 'required',
        'wfm_start' => 'required',
        'pic_office_name' => 'required',
        'no_hp_pic' => 'required',
        'product_diminta' => 'required',
        'project_name' => 'required',
        'bandwidth' => 'required',
        'target_treg' => 'required',
        'witel' => 'required',
        'alamat' => 'required',
        'longitude' => 'required',
        'latitude' => 'required',
        'petugas' => 'required',
        'tgl_create' => 'required',
        'status' => 'required',
        ]);

        $UserManage = User::findOrFail($id);
        
        $UserManage->update([
            'sc_number' => $req->sc_number,
            'office_name' => $req->office_name,
            'detail_end_cust' => $req->detail_end_cust,
            'wfm_start' => $req->wfm_start,
            'pic_office_name' => $req->pic_office_name,
            'no_hp_pic' => $req->no_hp_pic,
            'product_diminta' => $req->product_diminta,
            'project_name' => $req->project_name,
            'bandwidth' => $req->bandwidth,
            'target_treg' => $req->target_treg,
            'witel' => $req->witel,
            'alamat' => $req->alamat,
            'longitude' => $req->longitude,
            'latitude' => $req->latitude,
            'petugas' => $req->petugas,
            'tgl_create' => $req->tgl_create,
            'status' => $req->status,
        ]);
        return redirect('new_install')->with('Success', 'Data Has Been Update');
    }
}
