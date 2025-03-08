<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $data = [
            'nama' => 'Anggun',
            'kelas' => 'D3MI',
            'npm' => '2307051004',
        ];
        return view('profile', $data);
    }
}