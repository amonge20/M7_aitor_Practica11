<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControladorEjercicio1 extends Controller
{
    
    public function arrel(){
        return view('principal');
    }

    public function ej1Parametro(){
        return 'Éste es el resultado del primer ejercicio de la 
        práctica hecha por Aitor Monge';
    }
}