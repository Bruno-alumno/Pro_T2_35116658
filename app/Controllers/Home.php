<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() 
    {
        echo view('front/head');
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }

    public function quienes_somos()
    {
        echo view('front/head');
        echo view('front/navbar');
        echo view('front/quienes_somos');
        echo view('front/footer');
}

    public function acerca_de() 
    {
        echo view('front/head');
        echo view('front/navbar');
        echo view('front/acerca_de');
        echo view('front/footer');
}       
    public function Registrarse() 
    {
        echo view('front/head');
        echo view('front/navbar');
        echo view('front/registrarse');
        echo view('front/footer');   
 }    
    public function Login() 
    {
        echo view('front/head');
        echo view('front/navbar');
        echo view('front/Login');
        echo view('front/footer'); 
}
    
    }
    