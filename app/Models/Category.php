<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Category extends Model{
        protected $table = "Categorias";
        protected $fillable = ['title', 'slug'];

        //Definimos relacion One to Many
        public function post() {
            return $this->hasMany(Post::class);
        }
    }
?>
