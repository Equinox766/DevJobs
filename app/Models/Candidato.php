<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
      'user_id',
      'vacante_id',
      'cv',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
