<?php

namespace App\Models;

use App\Models\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubService extends Model
{
    use HasFactory;

    protected $fillables = ['title', 'price', 'other_price', 'time', 'service_id' , 'description'];

    public function requirements() {
        return $this->belongsToMany(Requirement::class);
    }
}
