<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'users';
    protected $fillable = [
        'username',
        'password',
        'email',
        'phonenumber',
        'name',
        'surname',
        'branch_id',
        'birthday',
        'address',
        'idcard',
        'position',
        'salary',
        'salary_type'
    ];
    protected $hidden = [
        'password'
    ];

    public static function selectAll(){
        return self::paginate(10);
    }

    public static function selectById($id){
        return self::Where('id', $id)->first();
    }

    public static function selectmenagers(){
        return self::Where('position', 1)->paginate(10);
    }

    public static function getPositionOfUser($id){
        $PS = self::Where('id', $id)->first();
        if($PS->position == '1'){
            return "Manager";
        }
        return "Staff";

    }

    public function getBranchOfUser(){
        return Branch::where('id', $this->branch_id)
                    ->first();
    }

    public static function selectstaffall(){
        return self::Where('position', 2)->paginate(10);
    }

    public static function delUser($userID){
        return self::Where('id', $userID)->delete();
    }
    public function getSalaryOfUser(){
        $salary = Salary_slip::where('user_id', $this->id)
                              ->whereMonth('created_at', Carbon::today()->month)->get();
        if($salary->count() < 1){
            return "ยังไม่ได้รับ";
        }
        return "ได้รับ";
    }

    public function getAttendOfUser(){
        $attend = Attend::where('user_id', $this->id)
                         ->whereDate('created_at', Carbon::today())->get();
        if($attend->count() < 1){
            $attend->work = "ยังไม่เข้างาน";
            return $attend;
        }
        $attend->work = "เข้างานแล้ว";
        return $attend;
    }


}
