<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class PrimerControlador extends Controller{
        public function index($nombre = "No se recibio el nombre"){
            return "Esta la accion index del controlador: PrimerControlador. Parametro enviado = $nombre";
        }
    }
?>


