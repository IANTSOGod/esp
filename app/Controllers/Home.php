<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index.php');
    }
    public function about(): string 
    {
        return view('about.php');
    }
    public function contact(): string
    {
        return view('contact.php');
    }
    public function fmodulaire(): string
    {
        return view('fmodulaire.php');
    } 
    public function fcontinue(): string
    {
        return view('fcontinue.php');
    }
    public function finitiale(): string 
    {
        return view('finitiale.php');
    }
    public function IG(): string 
    {
        return view('IG.php');
    }
    public function GL(): string 
    {
        return view('GL.php');
    }
    public function IM(): string 
    {
        return view('IM.php');
    }
    public function WEB(): string 
    {
        return view('WEB.php');
    }
    public function SR(): string 
    {
        return view('SR.php');
    }
    public function inscription(): string 
    {
        return view('inscription.php');
    }
}
