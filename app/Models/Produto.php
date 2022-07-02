<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $table = 'produto';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'nome',
        'preco',
    ];

    protected $timestamps = false;

    /**
     * Get the user that owns the Produto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedido_produto(): BelongsTo
    {
        return $this->belongsTo(Pedido_Produto::class, 'id_produto', 'id');
    }
}
