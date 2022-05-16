<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    public function index()
    {



        $isim = 'Esra';
        $soyisim = 'Karpınar';
        //return view('anasayfa',with(['isim' => $isim,'soyisim'=>$soyisim]));
        $isimler = ['Cem','Esra','Murat', 'Ebru','Aydın'];
        //return view('anasayfa', compact('isim','soyisim','isimler'));
        $kullanicilar = [
          ['id'=>1,'kullanici_adi'=> 'Cem'],
          ['id'=>2,'kullanici_adi'=> 'Esra'],
          ['id'=>3,'kullanici_adi'=> 'Murat'],
          ['id'=>4,'kullanici_adi'=> 'Ebru'],
          ['id'=>5,'kullanici_adi'=> 'Aydın']
        ];
        return view('anasayfa',compact('isim','soyisim','isimler','kullanicilar'));

    }
}
