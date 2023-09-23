<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $frist = 'Selamat Datang';
    $article = 'Raharja adalah sebuah Universitas swasta di Tangerang, provinsi Banten, Indonesia,
    dengan konsentrasi pengajaran manajeman dan ilmu komputer. Semboyannya adalah "Get the Better Future by Computer Science".';
    $title = 'Home';

    $data['frist'] = $frist;
    $data['article'] = $article;
    $data['title'] = $title;

    return view('landing/index', $data);
  }
}