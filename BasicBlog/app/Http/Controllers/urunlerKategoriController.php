<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\phone;

class urunlerKategoriController extends Controller
{
    public function indexFunction(){
        return view('index');
    }

    public function urunlerKategoriFunction(){
        return view('altSayfalar.urunlerKategoriView');
    }

    public function cepTelefonlariFunction(){
        $cepTelefonlari=phone::get();
        //dd($cepTelefonlari);
        //echo $cepTelefonlari[2]['fiyat'];
        return view('altSayfalar.cepTelefonlariView',compact('cepTelefonlari'));
    }

    public function notebookFunction(){
        return view('altSayfalar/notebookView');
    }

    public function masaustuFunction(){
        return view('/altSayfalar/masaustuView');
    }

    public function formFunction(){
        return view('altSayfalar.cepTelefonlariFormView');
    }

 
    public function ekleFunction(Request $istek){
        //dd($istek);
        //echo $istek->model;
        $kayit=new phone();
        $kayit->model=$istek->model;
        $kayit->fiyat=$istek->fiyat;
        $kayit->gorsel=$istek->gorsel;
        $kayit->save();
        return redirect()->route('formName');
    }

    public function guncelleFormFunction($id){
        //echo $id;
        $kayit=phone::findOrFail($id);//select * from phones where id=$id
        //dd($kayit);
        return view('altSayfalar.cepTelefonlariGuncelleFormView',compact('kayit'));
    }
    
    public function guncelleFunction(Request $istek, $id){
        //dd($istek);
        $kayit=phone::findOrFail($id);
        $kayit->model=$istek->model;
        $kayit->fiyat=$istek->fiyat;
        $kayit->gorsel=$istek->gorsel;
        $kayit->update();
        return redirect()->route('cepTelefonlariName');
    }

    public function silFunction($id){
        $kayit=phone::findOrFail($id)->delete();
        return redirect()->route('cepTelefonlariName');
    }
}