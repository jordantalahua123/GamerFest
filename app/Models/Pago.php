<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'pagos';

    protected $fillable = ['titularpago','comprobante','monto','fecha'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripciongrps()
    {
        return $this->hasMany('App\Models\Inscripciongrp', 'pagos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcionidvs()
    {
        return $this->hasMany('App\Models\Inscripcionidv', 'pagos_id', 'id');
    }
    
}
