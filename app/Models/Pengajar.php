<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['mapel'];
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
