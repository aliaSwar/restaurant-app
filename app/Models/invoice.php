<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;

    public function order()
     {
        return $this->belongsTo(Order::class);
     }

            
     public function resturant()
     {
         return $this->belongsTo(Restaurant::class);}
}
