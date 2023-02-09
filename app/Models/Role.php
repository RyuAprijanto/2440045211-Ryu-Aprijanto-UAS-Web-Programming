<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primarykey = 'id';

    protected $fillable = [
        'role_name'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
