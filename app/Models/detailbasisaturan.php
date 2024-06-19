<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailbasisaturan extends Model
{
    use HasFactory;
    protected $fillable = [
        'gejala_id',
        'basisaturan_id'
    ];

    public function gejala()
    {
        return $this->belongsTo(gejala::class, 'gejala_id');
    }

    public function basisaturan()
    {
        return $this->belongsTo(Basisaturan::class, 'basisaturan_id', 'id');
    }
}
