<?php
    namespace App\Http\Controllers\Dashboard;
    use App\Http\Controllers\Controller;
use App\Http\Requests\PutRequest;
use App\Http\Requests\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;

    class PostController extends Controller{
        //Metodo que muestra todos los posts
        public function index(){
            $posts = Post::paginate(3);
            return view('dashboard.posts.index',[
                'posts' => $posts
            ]);
        }

        //Metodo que muestra el formulario para crear una nueva entidad
        public function create(){
            $categorias = Category::all();
            return view("dashboard.posts.create", [
                'categorias' => $categorias
            ]);
        }

        //Metodo que guarda en la db la nueva entidad que se creo
        public function store(StoreRequest $request){
            //Validamos los datos con el metodo validate
            /*$validatedData = $request->validate([
                'title' => 'required|string|max:500',
                'slug' => 'required|string|max:500',
                'description' => 'required|string',
                'content' => 'required|string',
                'image' => 'string',
                'posted' => 'string',
                'categoria_id' => 'required|string'
            ]);*/
            //Validamos los datos con la clase StoreRequest
            $validatedData = $request->validated();
            //Guardamos el nuevo objeto en la db
            try {
                Post::create($validatedData);
                return redirect("/posts");
            }catch (\Exception $e){
                return redirect("/posts");
            }
        }

        //Metodo que muestra una entidad en especifico
        public function show(Post $post){
            return view('dashboard.posts.show', [
                'post' => $post
            ]);
        }

       //Metodo que muestra un formulario para editar una entidad
        public function edit(Post $post){
            $categorias = Category::all();
            return view('dashboard.posts.edit', [
                'post' => $post,
                'categorias' => $categorias
            ]);
        }

        //Metodo que guarda en la db la entidad que fue edita
        public function update(PutRequest $request, Post $post){
            $postEncontrado = Post::find($post->id);
            $validatedData = $request->validated();

            //Guardamos en una ubicacion la imagen
            $validatedData['image'] = $request->file('image')->store('images/cliente', 'public');

            $postEncontrado->update($validatedData);
            return redirect("/posts");
        }

        //Metodo que elimina una entidad de la db
        public function destroy(Post $post){
            $post->delete();
            return redirect("/posts");
        }
    }
?>
