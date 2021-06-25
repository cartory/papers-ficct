<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rol
 *
 * @property $id
 * @property $nombre
 *
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Rol extends Model
{

    use SoftDeletes;

    protected $table = 'Rol';
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'Rolid', 'id');
    }
    

}
