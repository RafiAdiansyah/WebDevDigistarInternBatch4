<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modify;

class ModifyController extends Controller
{
    public function index(){
        $Modify_OLO = modify::all();
        return view('modify', compact("Modify_OLO"));
    }
    public function show($id){
        $Modify_OLO = modify::findOrFail($id);
        return view('viewModify', compact("Modify_OLO"));
    }
    public function destroy($id){
        $Modify_OLO = modify::findOrFail($id);
        $Modify_OLO->delete();
       return redirect()->back();
    }
    public function edit($id){
        $Modify_OLO = modify::findOrFail($id);
        return view('editModify', compact("Modify_OLO"));
    }
    public function update(Request $req, $id){
        $this->validate($req, [
        'sc_number' => 'required',
        'office_name' => 'required',
        'detail_end_cust' => 'required',
        'pic_office_name' => 'required',
        'sid' => 'required',
        'witel' => 'required',
        'req_modify' => 'required',
        'req_bandwidth' => 'required',
        'wfm_start' => 'required',
        'alamat' => 'required',
        'longitude' => 'required',
        'latitude' => 'required',
        'tgl_create' => 'required',
        'petugas' => 'required',
        'status' => 'required',
        ]);

        $Modify_OLO = modify::findOrFail($id);
        
        $Modify_OLO->update([
            'sc_number'=>$req->sc_number,
            'office_name'=>$req->office_name,
            'detail_end_cust'=>$req->detail_end_cust,
            'pic_office_name'=>$req->pic_office_name,
            'sid'=>$req->sid,
            'witel'=>$req->witel,
            'req_modify'=>$req->req_modify,
            'req_bandwidth'=>$req->req_bandwidth,
            'wfm_start'=>$req->wfm_start,
            'alamat'=>$req->alamat,
            'longitude'=>$req->longitude,
            'latitude'=>$req->latitude,
            'tgl_create'=>$req->tgl_create,
            'petugas'=>$req->petugas,
            'status'=>$req->status,
        ]);
        return redirect('modify')->with('Success', 'Data Has Been Update');
    }
}