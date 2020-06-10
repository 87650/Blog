<?php

namespace App\Http\Controllers;
use  App;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Mail\Gmaill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Silber\Bouncer\Database\HasRolesAndAbilities;



class Controllerl extends Controller
{



    public function tests(Request $request)
    {
        $test = App\Modell::nam();
        $sss = App\Modell::nams();
      //  $forms = App\Modell::form();
    //  $sss = 8;
      //  ksort($test);
 //   /*

        foreach ($test as $key => $value) {
            if (empty($namer1)) {
               $namer1 = $test[$sss]['name'];
              //  $namer1  = $value->name;
            }
            if (empty($datsr1)) {
                $datsr1 = $test[$sss]['dats'];
            }

            if (empty($Textsr1)) {
                 $Textsr1 = $test[$sss]['Texts'];
            }
        }

        $sss--;
        foreach ($test as $key => $value) {
            if (empty($namer2)) {
                 $namer2 = $test[$sss]['name'];
            }
            if (empty($datsr2)) {
                 $datsr2 = $test[$sss]['dats'];
            }
            if (empty($Textsr2)) {
                 $Textsr2 = $test[$sss]['Texts'];
            }
        }
        $sss--;
        foreach ($test as $key => $value) {
            if (empty($namer3)) {
                 $namer3 = $test[$sss]['name'];
            }
            if (empty($datsr3)) {
                $datsr3 = $test[$sss]['dats'];
            }

            if (empty($Textsr3)) {
                 $Textsr3 = $test[$sss]['Texts'];
            }
            if (Auth::check())
            {
              $testo = $test[$sss]['id'] = - 1;
                if ($testo == $test[$sss]['id'])
                {
                //
                //    $order = App\Mail\Gmaill::findOrFail($ide);
                   //
                }
                else
                {
                    //Mail::to("toma6456@gmail.com")->queue(new App\Mail\Gmaill($request->user()));
                }
            }
        }


       // return view('neve', compact('namer1', 'datsr1', 'Textsr1', 'namer2', 'datsr2', 'Textsr2', 'namer3', 'datsr3', 'Textsr3'));
      //  $user = Auth::user();
   // return $user;
      //  utf8_encode_deep($sss1);
 //   */

 //  return  $sss;
    }


    public function test2()
    {
        return view('/form');
    }

    public function test3(Request $request)
    {
     $result = App\Modell::nams1();
       // view('Posts', compact($result));
 //   $result = ["yty","fff","ffd"];
        if (Auth::check()) {
            $tests = "вы вошли";
            return  view('leauts.poste', compact("result",'tests'));
           // return $request->user();

        }
        else {
            return view('leauts.poste', compact("result"));
        }

    }
    public function test4($id)
    {
        $result = App\Modell::nams1();
        $comments  = DB::table('comment')->get();
        $user = Auth::user();
        foreach ($result as $kei => $value)
        {
            if ($id == $value->id)
            {
              $name = $value->name;
              $dats = $value->dats;
              $Texts = $value->Texts;
              $value1 = $value;
              $tests = "ds";
                if (Auth::check()) {
                    return view("id", compact('name', 'dats', 'Texts','tests','id','value1','comments','user'));
                }
               else
               {
                   return view("id", compact('name', 'dats', 'Texts','id','value1','comments'));
               }

            }

        }

   //  return $comments;


    }
    public function test5($id)
    {
        $result = App\Modell::nams1();
        foreach ($result as $kei => $value) {
            if ($id == $value->id) {
                $name = $value->name;
                $dats = $value->dats;
                $Texts = $value->Texts;
                $id = $value->id;
                return view("form_update", compact('name', 'dats', 'Texts', 'id'));
            }
        }
      //  return view('form_update',compact($result));

    }
    public function test12()
    {
        App\Modell::nams2();
        return Redirect::away('/form');
    }
    public function test10()
    {
      $id = App\Modell::nams3();
        return Redirect::away("/posts/$id");
    }

    public function test1()
    {
        App\Modell::forms();
        return Redirect::away('/form');
    }

    public function AdminPanel()
    {
        return view('admin_panel');
    }




}
