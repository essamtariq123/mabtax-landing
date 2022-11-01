<?php

namespace App\Models;

use App\Models\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubService extends Model
{
    use HasFactory;

    protected $fillables = ['title', 'price', 'other_price', 'time', 'service_id' , 'description', 'is_featured'];

    protected $appends = ['formatted_price', 'formatted__other_price'];

    public function requirements() {
        return $this->belongsToMany(Requirement::class);
    }

    public function getFormattedPriceAttribute() {
        
        return number_format($this->price);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function getFormattedOtherPriceAttribute() {
        return number_format($this->other_price);
    }
}
