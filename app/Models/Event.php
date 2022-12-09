<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
