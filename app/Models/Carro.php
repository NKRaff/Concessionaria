<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $table = 'carro';
    protected $fillable = [
        'cliente_id',
        'modelo',
        'ano',
        'chassi',
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'cliente_id', 'id');
    }

}
