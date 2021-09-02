<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return [
            "NIS" => 3103119024,
            "Name" => "Anggun Wardani Mubarok",
            "Gender" => "Perempuan",
            "Phone" => 62895383035868,
            "Class" => "XII RPL 1"
        ];
    }
}
