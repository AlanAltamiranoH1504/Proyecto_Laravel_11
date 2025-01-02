<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PutCategoriaRequest;
use App\Http\Requests\StoreCategoriaRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriaController extends Controller{

    //Muestra el listado de categorias
    public function index(){
        $categorias = Category::all();
        return view('dashboard.categorias.index', [
            'categorias' => $categorias
        ]);
    }

    //Muestra formulario para crear una nueva categoria
    public function create(){
        return view("dashboard.categorias.create");
    }

    //Almacena en la db la nueva categoria
    public function store(StoreCategoriaRequest $request){
        $validateData = $request->validated();

        Category::create($validateData);
        return redirect('/categorias')->with('success', 'Categoria creada correctamente');
    }

    //Muestra los detalles de una categoria
    public function show(string $id){
        $categoria = Category::find($id);

        return view('dashboard.categorias.show', [
            'categoria' => $categoria
        ]);
    }

    //Muestra formulario para la edicion de una categoria
    public function edit(string $id){
        $categoria = Category::find($id);
        return view('dashboard.categorias.edit', [
            'categoria' => $categoria
        ]);
    }

    //Guarda en la db la actualizacion de la categoria
    public function update(PutCategoriaRequest $request, string $id){
        $categoriaEncontrada = Category::find($id);
        $validateData = $request->validated();

        $categoriaEncontrada->update($validateData);
        return redirect("/categorias")->with('success', 'Categoria actualizada correctamente');
    }

    //Elimina una categoria
    public function destroy(string $id){
        $categoriaEncontrada = Category::find($id);
        $categoriaEncontrada->delete();
        return redirect("/categorias")->with('success', 'Categoria eliminada correctamente');
    }
}
