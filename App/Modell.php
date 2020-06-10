<?php

namespace App;
use PDO;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
//use  App;
use Silber\Bouncer\Database\HasRolesAndAbilities;


use Illuminate\Routing\Route;


class Modell extends Model
{
   // use HasRolesAndAbilities;
   // use Bouncer;
    public $user;

    public static  function nam()
    {
        $host = '127.0.0.1';
        $db   = 'teste';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        $stmt = $pdo->query("SELECT * FROM post")->fetchAll(PDO::FETCH_UNIQUE);

        return $stmt;


    }
    public static function nams()
    {
        $host = '127.0.0.1';
        $db   = 'teste';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        $sss = $pdo->query("SELECT id FROM post ORDER BY id  DESC LIMIT 1")->fetchColumn();
        return $sss;
    }
    public static function forms()
    {
     $name =  $_POST['name'];
     $dats =  $_POST['dats'];
     $Texts = $_POST['Texts'];

        DB::insert("INSERT INTO `post` (`name`,`dats`,`Texts`) VALUES (?,?,?);",["$name","$dats","$Texts"]);
       // return Route::get('/t', 'Controllerl@tests');
    }

    public static function nams1()
    {
     // return  DB::select('select * from post')->paginate(15);
      return  DB::table('post')->paginate(6);
    }
    public static function nams2()
    {
        $id =  $_POST['id'];
        $name =  $_POST['name1'];
        $dats =  $_POST['dats1'];
        $Texts = $_POST['Texts1'];

        DB::update("update post set `name` = ?,`dats` = ?, `Texts` = ?  WHERE id = ?;",["$name","$dats","$Texts",
            "$id"]);

    }
    public static function nams3()
    {

        $name2 =  $_POST['name2'];
        $email =  $_POST['email'];
        $comment =  $_POST['commen'];
        $id_ =  $_POST['id_'];
        DB::insert("INSERT INTO `comment` (`name`,`email`,`comments`,`id_post`) VALUES (?,?,?,?);",["$name2","$email","$comment","$id_"]);
        return  $id_;
    }


}
