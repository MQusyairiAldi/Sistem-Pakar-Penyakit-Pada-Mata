<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKonsultasi extends Model
{
    use HasFactory;

    protected $table = 'detailkonsultasis';

    // Define fillable fields
    protected $fillable = [
        'konsultasi_id',
        'gejala_id',
    ];

    public function konsultasi()
    {
        return $this->belongsTo(Konsultasi::class, 'konsultasi_id');
    }

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'gejala_id');
    }
}