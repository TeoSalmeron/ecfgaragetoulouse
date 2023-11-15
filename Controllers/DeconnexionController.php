<?php

namespace App\Controllers;

class DeconnexionController extends Controller
{
    public function index()
    {
        session_destroy();
        unset($_SESSION);
        header('Location: /');
        die();
    }
}