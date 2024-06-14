<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class tienda extends Model
{
    use HasFactory;

    protected $table = "tiendas";
    protected $primaryKey = "id";
    protected $fillable = ['sucursal', 'zona', 'horas_venta', 'vendedor_id'];
    protected $guarded = ['id'];

    public function vendedor(): BelongsTo {
        return $this->belongsTo(vendedor::class);
    }

    public function cliente(): BelongsToMany {
        return $this->belongsToMany(cliente::class);
    }
}
