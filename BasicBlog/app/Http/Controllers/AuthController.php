<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerFunction(Request $request){
        //dd($request->method());
        if ($request->method()=="GET"){
            return view('altSayfalar.registerView');
        }else{
            //POST metodu algılandı. Bunun algılanması register sayfasının açıldığı ve  değer gönderildiği anlamına gelir.
            $data=$request->only("name","email","password");
            //echo $data['email'];
            $existingUser=User::where('email',$data['email'])->first();
            if ($existingUser){
                //$existingUser==True anlamına gelir. Yani kullanıcı kayıtlı demektir.
                return redirect(route('loginName'));
            }else{
                User::create($data);
                return redirect(route('loginName'))->with('durum','Kayıt İşlemi Başarılı');
            }
           
        }
      }

      public function loginFunction(Request $request){
        if ($request->method()=="GET"){
          return view('altSayfalar.loginView');
        }else{
            $data=$request->only('email','password');
            if (Auth::attempt($data)){
                return redirect(route('indexName'));
            }
            else{
                return redirect(route('loginName')); 
            }
        }
            
      }

      public function logoutFunction(){
        Auth()->logout();
        return redirect(route('loginName'));
      }
}
