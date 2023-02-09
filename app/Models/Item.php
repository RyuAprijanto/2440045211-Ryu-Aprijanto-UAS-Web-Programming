<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primarykey = 'id';

    protected $fillable = [
        'item_name',
        'item_desc',
        'price'
    ];

    public function Order()
    {
        return $this->hasOne(Order::class);
    }
}
