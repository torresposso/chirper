<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
  public function index()
  {
    $chirps = [
      [
        'autor' => 'Jane Doe',
        'message' => 'Hello World!',
        'time' => '5 minutes ago',
      ],
      [
        'autor' => 'Jhon Doe',
        'message' => 'Hello everybody',
        'time' => '8 minutes ago',
      ],

      [
        'autor' => 'Alice Jhonson',
        'message' => 'Hello World!',
        'time' => '10 minutes ago',
      ],

    ];

    return view('home', data: ['chirps' => $chirps]);

  }
}
