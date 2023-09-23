<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class InformasiController extends Controller
    {
        public function index()
        {
            $title = 'Informasi';
            $frist = 'Selamat Datang';
            $article = 'Raharja adalah sebuah Universitas swasta di Tangerang, provinsi Banten, Indonesia,
            dengan konsentrasi pengajaran manajeman dan ilmu komputer. Semboyannya adalah "Get the Better Future by Computer Science".';
            $article1 = 'memenuhi kebutuhan masyarakat khususnya wilayah Tangerang dan Banten, Universitas Raharja memiliki 2 
            Fakultas dan 11 Program Studi.';

            $data['title'] = $title;
            $data['frist'] = $frist;
            $data['article'] = $article;
            $data['article1'] = $article1;
            return view('informasi\index', $data);
        }
    }