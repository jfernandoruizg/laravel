<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='categoria'; //hace referencia a la tabla categoria de la BD
    protected $primarykey='idcategoria';
    public $timestamps=false;//para no tomar la fecha ni la hora en que se creo el modelo
    protected $fillable=[
   'nombre',
   'descripcion',
   'condicion',
    ];

    protected $guarded =[
     ];
}
