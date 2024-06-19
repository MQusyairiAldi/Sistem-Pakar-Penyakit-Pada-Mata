<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class basisaturan extends Model
{

      use HasFactory;
protected $table = 'basisaturans';

    // Define fillable fields
    protected $fillable = [
        'penyakit_id',
        'gejala_id'

    ];
 
    public function penyakit()
    {
        return $this->belongsTo(penyakit::class, 'penyakit_id');
    }
    public function detailbasisaturans()
    {
        return $this->hasMany(Detailbasisaturan::class, 'basisaturan_id', 'id');
    }
    public function gejala()
    {
        return $this->belongsToMany(Gejala::class, 'detailbasisaturans', 'basisaturan_id', 'gejala_id');
    }
}