<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'aulas';

    protected $fillable = ['Nombre','edificio','direccion','observaciones'];
	
}
