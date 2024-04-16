<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\new_install;

class NewInstallController extends Controller
{
    public function index(){
        $NewInstall = new_install::all();
        return view('new_install', compact("NewInstall"));
    }
    public function show($id){
        $NewInstall = new_install::findOrFail($id);
        return view('viewNewInstall', compact("NewInstall"));
    }
    public function destroy($id){
        $NewInstall = new_install::findOrFail($id);
        $NewInstall->delete();
       return redirect()->back();
    }
    public function edit($id){
        $NewInstall = new_install::findOrFail($id);
        return view('editNewInstall', compact("NewInstall"));
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

        $NewInstall = new_install::findOrFail($id);
        
        $NewInstall->update([
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

    public function search(Request $req){
        $keyword = $req->keyword;
        $NewInstall = new_install::where([
            ['office_name', 'like', '%' . $keyword . '%'], 
            ['sc_number', 'like', '%' . $keyword . '%'],
            ['product_diminta', 'like', '%' . $keyword . '%'],
            ['witel', 'like', '%' . $keyword . '%'],
            ['status', 'like', '%' . $keyword . '%']
        ]);
        return view('new_install', compact("NewInstall"));
    }
}