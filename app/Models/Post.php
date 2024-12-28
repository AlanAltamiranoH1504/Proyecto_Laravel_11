<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Post extends Model{
        //Definimos la tabla con la que va a trabajar
        protected $table = 'posts';
        //Definimos las columnas que queremos exponer del modelo
        protected $fillable = ['title', 'slug', 'description', 'content', 'image', 'posted', 'categoria_id'];

        //Definimos relacion hasMany con Categorias
        public function category(){
            return $this->belongsTo('App\Models\Category', 'categoria_id');
        }
    }
?>
