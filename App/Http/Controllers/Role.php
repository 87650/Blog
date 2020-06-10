<?php

namespace App\Http\Controllers;

use App\Modell;
use App\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role extends Controller
{
public function AddAdminRole()
{
    $user = Auth::user();

    $result = Roles::admin();
    if ($result == true)
    {
        return 'роль админ успешно присвоена';
    }
    else
    {
        return 'роль админ не присвоена';
    }

}
    public function RoleСomparison()
    {
        $user = Auth::user();
     $roll =  Roles::Roles();
     foreach ($roll as $value)
     {
         if ($value->role == $user->role)
         {
             if ($value->role == "Administrator");
             {
                 return view('/admin_panel');
             }
         }
         else
         {
             return "у вас нет прав доступа";
         }
     }

    }

}
