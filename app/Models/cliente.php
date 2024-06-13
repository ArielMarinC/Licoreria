<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class cliente extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ['nombre_apellido', 'edad', 'telefono', 'direccion'];
    protected $guarded = ['id'];

    public function tiendas(): BelongsToMany {
        return $this->belongsToMany(tienda::class);
    }
}
