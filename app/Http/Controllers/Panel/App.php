<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class App extends Controller
{
    public function index()
    {
        $data['names'] = ['Ramazan','Ahmet','Veli','Mehmet','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve','Ayşe','Fatma','Zeynep','Ali','Hasan','Hüseyin','Merve'];
        $data['blogData'] = '<h1>Merhaba</h1> <p>Benim adım Ramazan Altun</p>';
        return view('auth.login',$data);
       // return view('auth.login',['name'=>'Ramazan','surname'=>'Altun']);
    }
}
