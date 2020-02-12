<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use App\Model\Order;
class Gate extends Model
{
    protected $fillable=['order_number','chalan','gate_seria'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
