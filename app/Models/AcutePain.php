<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcutePain extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pasiens()
    {
        return $this->belongsTo(Pasien::class);
    }
}
