<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use App\Model\Merchandiser;
class Order extends Model
{
    protected $fillable=['buyer','order_number'];

    public function merchandiser(){
        return $this->hasMany(Merchandiser::class);
    }
}
