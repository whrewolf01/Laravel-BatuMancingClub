<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;
    protected $table = 'info_spot';
    protected $primaryKey = 'id_spot';
    public $incrementing = true;
    protected $fillable = ['lokasi', 'ikan'];
    public $timestamps = false;
}
