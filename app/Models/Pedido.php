<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $table = 'pedido';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'id_cliente',
    ];


    protected $timestamps = false;

    /**
     * Get all of the comments for the Pedido
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cliente(): HasMany
    {
        return $this->hasMany(Cliente::class, 'id', 'id_cliente');
    }

    /**
     * Get the user that owns the Pedido
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedido_produto(): BelongsTo
    {
        return $this->belongsTo(Pedido_Produto::class, 'id_produto', 'id');
    }

}
