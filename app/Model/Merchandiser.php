<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class Merchandiser extends Model
{
    protected $fillable =['buyer_id','order_id','item','size','qty','booking','actual_qty','file_no'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
