<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class ProfileController extends Controller
{
    public function index ()
    {    
        $frist = 'Hello';
        $name = 'Saya Ridwan Yoga Permana seorang Mahasiswa Teknik Informatika di Universitas Raharja, Saya memiliki minat dalam
        pembelajaran Web Programing juga mempunyai keinginan untuk terus mengembangkanbakat saya dalam mempelajari fitur-fitur
        serta tren terbaru.';
        $title = 'Profile';
    
        
        $data['frist'] = $frist;
        $data['name'] = $name;
        $data['title'] = $title;

        return view('profile\index', $data);
    }
   
}