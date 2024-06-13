<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class vendedor extends Model
{
    use HasFactory;

    protected $table = "vendedores";
    protected $primaryKey = "id";
    protected $fillable = ['nombre_apellido', 'profesion', 'grado_academico', 'telefono'];
    protected $guarded = ['id'];

    public function tiendas(): HasMany {
        return $this->hasMany(tienda::class);
    }
}
