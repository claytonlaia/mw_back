<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    use HasFactory;
    protected $table = 'vendas';

    public function produtos(){
        return $this->belongsTo(Produtos::class);
    }
}
