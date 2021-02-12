<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utakmica extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['domacin', 'domacin_url', 'gost', 'gost_url','domacin_golovi','gost_golovi', 'opis','liga_id'];
}
