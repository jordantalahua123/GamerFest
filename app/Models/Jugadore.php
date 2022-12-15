<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugadore extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'jugadores';

    protected $fillable = ['equipos_id','nombre','cedula','telefono','correo'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'equipos_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcionidvs()
    {
        return $this->hasMany('App\Models\Inscripcionidv', 'jugadores_id', 'id');
    }
    
}
