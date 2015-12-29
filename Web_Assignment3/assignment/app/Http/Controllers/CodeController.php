<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Code;
use Auth;

class CodeController extends Controller
{
    public function store(){


      $data = Input::get('user_code');
      $name = Input::get('name');
      $id = Input::get('id');
      $code = new Code;
      $code->code = $data;
      $code->name = $name;
      $code->user_id = $id;
      $code->save();
      $data = str_replace("<?php", "", $data);
      $data = str_replace("?>", "", $data);
      eval($data);



    }


    public function show(){
      $codes = Code::all();
      return view('codes', ['codes' => $codes]);

      /*foreach ($codes as $code) {
        echo $code->name . "<br>";
        $clean = $code->code;
        $clean = str_replace("<?php", "", $clean);
        $clean = str_replace("?>", "", $clean);
        echo $clean;
        eval($clean);
        echo "<hr>";

      }*/
    }

}
