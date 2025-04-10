<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tevekenysegek extends Model
{
    /** @use HasFactory<\Database\Factories\TevekenysegekFactory> */
    use HasFactory;

    protected $fillable = [
        'kat_id',
        'tev_nev',
        'allapot',
    ];

    public function kategoriak(){
        return $this->belongsTo(kategoriak::class);
    }
}
