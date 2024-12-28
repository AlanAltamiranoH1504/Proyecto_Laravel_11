<?php
    namespace App\Http\Controllers\Dashboard;
    use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

    class PostController extends Controller{
        //Metodo que muestra todos los posts
        public function index(){

        }

        //Metodo que muestra el formulario para crear una nueva entidad
        public function create(){
            $categorias = Category::all();
            return view("dashboard.posts.create", [
                'categorias' => $categorias
            ]);
        }

        //Metodo que guarda en la db la nueva entidad que se creo
        public function store(Request $request){

            /*//Definimos las restricciones para guardar un nuevo post en la db
            $validate = $request->validate([
                'title' => 'required|max:500|string',
                'slug' => 'required|max:500|string',
                'description' => 'required|string',
                'content' => 'required|string'
            ]);

            try {
                //Guardamos el registro en la db
                Post::create($validate);
                return response()->json(['msg' => 'Post guarado de manera correcta'], 200);
            }catch (\Exception $e){
                return \response()->json(['msg' => 'Error en el guardado del post'], 500);
            }*/
        }

        //Metodo que muestra una entidad en especifico
        public function show(Post $post){
            //
        }

       //Metodo que muestra un formulario para editar una entidad
        public function edit(Post $post){
            //
        }

        //Metodo que guarda en la db la entidad que fue edita
        public function update(Request $request, Post $post){
            //
        }

        //Metodo que elimina una entidad de la db
        public function destroy(Post $post){
            //
        }
    }
?>
