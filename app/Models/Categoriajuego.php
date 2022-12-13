<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoriajuego extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'categoriajuegos';

    protected $fillable = ['tipo','numerojugadores','copetencia','descripcion'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videojuegos()
    {
        return $this->hasMany('App\Models\Videojuego', 'categorias_id', 'id');
    }
    
}
