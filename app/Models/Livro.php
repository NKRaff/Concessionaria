<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $table = 'livro';
    protected $fillable = [
        'autor_id',
        'titulo',
        'sinopse',
    ];

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'autor_id', 'id');
    }
}
