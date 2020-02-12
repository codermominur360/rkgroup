<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable=['gate_id','merchandiser_id','received_qty','mmr_no','order_id'];
}
