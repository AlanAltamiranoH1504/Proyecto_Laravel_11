<?php
    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    //Definimos rutas de prueba
    Route::get("/api", function (){
       return "<h1>Esta es una ruta de prueba desde la ruta /api</h1>";
    })->name('api');
    Route::get("/api2/{id}", function ($id){
        return "<h2>Esta es la segunda ruta que recibe un parametro obligatorio. ID: $id</h2>";
    })->name('api2');
    Route::get("/api3/{id?}", function ($id = "El parametro esta vacio"){
       return "<h2>Es esta la tercera ruta, puede recibir o no un parametro. Parametro: $id</h2>";
    })->name('api3');

    //Definimos rutas que regresan una vista
    Route::get("/api4/rutaView", function (){
        return view('introduccion.PrimerView');
    })->name('api4');
    Route::get("/api5/rutaView/{nombre?}", function ($nombre = "El parametro se encuentra vacio"){
        return view('introduccion.ViewParams', [
           'nombre' => $nombre
        ]);
    })->name('api5');

    //Rutas de tarea
    Route::get("/contact1", function (){
        //Ruta con redirect
        return redirect("/contact2");
       /*return view('introduccion.contact1', [
           'variable' => "Variable compartida correctamente"
       ]);*/
    });
    Route::get("/contact2", function (){
       return view('introduccion.contact2', [
           'variable' => 'Variable compartida correctamente desde contact 2'
       ]);
    });

    //Rutas con directiva if y foreach
    Route::get("/api6", function (){
       return view('introduccion.directivas', [
          'nombre' => "Alan Altamirano",
          'paises' => ['Mexico', "EUA", "Canada"]
       ]);
    })->name('api');

    //Rutas para el primer Cotrolador
    Route::get("/index/{nombre?}", [\App\Http\Controllers\PrimerControlador::class, 'index']);

    //Rutas para el controlador resource de Post
    Route::resource("/posts", \App\Http\Controllers\Dashboard\PostController::class);
?>
