<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    // public function profile(){
    //     $data = [
    //         'nama' => 'Adinda Aulia Sari',
    //         'kelas' => 'D',
    //         'npm' => '2117051018'
    //     ];
    //     return view('profile', $data);
    // }
}
