<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Merchandiser;
use App\Model\Gate;

class Order extends Model
{
    protected $fillable=['buyer','order_number'];

    public function merchandiser(){
        return $this->hasMany(Merchandiser::class);
    }
    public function gates(){
        return $this->hasOne(Gate::class,'order_number');
    }
     
}
