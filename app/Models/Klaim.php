<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klaim extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'tahun';
    public $incrementing = false;
}
