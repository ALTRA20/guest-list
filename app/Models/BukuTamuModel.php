<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class BukuTamuModel extends Model
{
    use HasFactory;
    protected $table = 'daftarTamu';
    protected $fillable = [
        'id', 'name', 'origin', 'necessity', 'created_at', 'updated_at'
    ];

}
