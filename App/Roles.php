<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Roles extends Model
{
public static function admin()
{
    $user = Auth::user();
    if ($user->role == "Administrator") {
        $roles = $user->role;
        $permission = "full-access";

        DB::insert('insert into role (role, permission) values (?, ?)', [$roles, $permission]);
        return true;
    }
    else
    {
        return false;
    }

}
public static function Roles()
{
    $results = DB::select('select * from role');
    return $results;
}
}
