<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\new_install;
use App\Models\modify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function logoutAction(Request $req){
        Auth::logoutAction();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('landingPage');
    }

    public function loginAction(Request $req){
        $user = User::where('nik', $req->nik)->first();
        if($user){
            return view('home');
        }
        return view('landingPage')->with('Selamat Datang');;
    }
    public function registerAction(Request $req){
        $user = User::create([
            'pic_name'=>$req->pic_name,
            'nik'=>$req->nik,
            'email'=>$req->email,
            'hp'=>$req->hp,
            'password'=>$req->password,
        ]);
        return view('landingPage');
    }
    public function home(){
        return view('home');
    }
    public function inputnewinstall(){
        return view('inputnewinstall');
    }
    public function inputnewinstall_action(Request $req){
        $new_install = new_install::create([
            'sc_number'=>$req->sc_number,
            'office_name'=>$req->office_name,
            'detail_end_cust'=>$req->detail_end_cust,
            'wfm_start'=>$req->wfm_start,
            'pic_office_name'=>$req->pic_office_name,
            'no_hp_pic'=>$req->no_hp_pic,
            'product_diminta'=>$req->product_diminta,
            'project_name'=>$req->project_name,
            'bandwidth'=>$req->bandwidth,
            'target_treg'=>$req->target_treg,
            'witel'=>$req->witel,
            'alamat'=>$req->alamat,
            'longitude'=>$req->longitude,
            'latitude'=>$req->latitude,
            'petugas'=>$req->petugas,
            'tgl_create'=>$req->tgl_create,
            'status'=>$req->status,
        ]);
        $NewInstall = new_install::all();
        return view('new_install', compact("NewInstall"));
    }
    public function modify(){
        return view('modify');
    }
    public function inputmodify(){
        return view('inputmodify');
    }
    public function input_modify_action(Request $req){
        $modify = modify::create([
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
        //menampilkan database
        $Modify_OLO = modify::all();
        return view('modify', compact("Modify_OLO"));
    }
    public function suspend_resume(){
        return view('suspend_resume');
    }
    public function validation(){
        return view('validation');
    }
    public function disconnect(){
        return view('disconnect');
    }
    public function assurance(){
        return view('assurance');
    }
    public function service_id(){
        return view('service_id');
    }
    public function dataTeknis(){
        return view('dataTeknis');
    }
    public function project(){
        return view('project');
    }
    public function userManagement(){
        return view('userManagement');
    }
}
