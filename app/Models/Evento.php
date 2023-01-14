<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'eventos';

    protected $fillable = ['Nombre','descripcion','fecha'];
	
}
