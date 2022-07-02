<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido_Produto extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $table = 'pedido_produto';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'id_pedido',
        'id_produto',
        'qtde',
    ];

    protected $timestamps = false;

    /**
     * Get all of the comments for the Pedido_Produto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedido_produto(): HasMany
    {
        return $this->hasMany(Pedido::class, 'id', 'id_pedido');
        return $this->hasMany(Produto::class, 'id', 'id_produto');
    }

}
