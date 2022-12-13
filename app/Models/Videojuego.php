<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'videojuegos';

    protected $fillable = ['categorias_id','nombre','compania','precio','descripcion'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoriajuego()
    {
        return $this->hasOne('App\Models\Categoriajuego', 'id', 'categorias_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function horarios()
    {
        return $this->hasMany('App\Models\Horario', 'videojuegos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripciongrps()
    {
        return $this->hasMany('App\Models\Inscripciongrp', 'videojuegos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcionidvs()
    {
        return $this->hasMany('App\Models\Inscripcionidv', 'videojuegos_id', 'id');
    }
    
}
