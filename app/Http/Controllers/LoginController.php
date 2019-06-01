<?php

namespace App\Http\Controllers;


use App\Api\UsersApi;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $users;

    public  function __construct(UsersApi $users){

        $this->users = $users;
    }

    public function login(Request $request){

        //$data = $this->users->getAll();
       /* $data =  $this->users->login($request->username, $request->password);
       var_dump((String)$data);
        if ((String)$data =='200'){
            return view('welcome');
        }else{
            return view('access.login');
        }
 */
        $data = array("username" => $request->username, "password" => $request->password);
        $data_string = json_encode($data);

        $ch = curl_init('http://54.71.17.17:8080/api/login');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string)
            )
        );
        $result = curl_exec($ch);
        $tmp=utf8_decode($result);
        $tmp2 =json_decode(utf8_encode($result),true);

        if ($tmp2['mensaje'] == 'Hola admin, has iniciado sesión con éxito!'){
            return view('welcome');
        }else{
            $error = 'PASSWORD O USUARIO INCORRECTO';
            return view('access.login',compact('error'));
        }


    }

    public function showLogin()
    {
        return view('access.login');
    }
}
