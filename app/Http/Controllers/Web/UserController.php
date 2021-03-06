<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{

    public function addUser(Request $req){
        $obj = new User();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->password = Hash::make($req['password']);
        $obj->position = 2;
        $obj->save();
        return response()->json($obj);
    }

    public function login(Request $req){
        $obj = User::Where('username', $req['username']);
        $usr;
        if($obj->count() < 1){
            return redirect()->back() ->with('alert', 'ไม่มีผู้ใช้งานในระบบ!');
        }else{
            $usr = $obj->first();
            if (Hash::check($req['password'], $usr->password)){
                $req->session()->put('login', $usr);
            }else{
                return redirect()->back() ->with('alert', 'รหัสผ่านไม่ถูกต้อง!');
            }
        }
        return redirect()->route('home');
    }

    public function logout(Request $req){
        $req->session()->forget('login');
        return redirect()->route('welcome');
    }

    public function home(Request $req){
        $usr = $req->session()->get('login');
        if($usr->position == 0){
            return view('pages.owner.homeowner',[
                "userlogin" => $usr,
                "position" => "Founder"
            ]);
        }else if($usr->position == 1){
            return view('pages.manager.homemanager',[
                "userlogin" => $usr,
                "position" => "Manager"
            ]);
        }
        return view('pages.staff.homecustomer',[
                "userlogin" => $usr,
                "position" => "Staff"
        ]);
    }

    public function addManager(Request $req){
        $obj = new User();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->password = Hash::make($req['password']);
        $obj->save();
        return response()->json($obj);
    }

}
