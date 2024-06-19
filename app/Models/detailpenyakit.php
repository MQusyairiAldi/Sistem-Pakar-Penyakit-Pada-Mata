<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailpenyakit extends Model
{
    use HasFactory;

    protected $table = 'detailpenyakits';

    // Define fillable fields
    protected $fillable = [
        'konsultasi_id',
        'penyakit_id',
        'presentase'
    ];

    public function penyakit()
    {
        return $this->belongsTo(penyakit::class, 'penyakit_id');
    }

    public function konsultasi()
    {
        return $this->belongsTo(konsultasi::class, 'konsultasi_id');
    }
}