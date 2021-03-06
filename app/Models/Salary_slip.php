<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Salary_slip extends Model
{
    //
    use SoftDeletes;
    protected $table = 'salary_slips';

    protected $fillable = [
        'user_id',
        'status',
    ];

    public static function selectAll(){
        return self::all();
    }
}
