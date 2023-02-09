<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primarykey = 'id';

    protected $fillable = [
        'user_id',
        'item_id',
        'price'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Item()
    {
        return $this->hasMany(Item::class);
    }
}
