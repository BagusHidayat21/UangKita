<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class User extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $fillable = [
        'username', 'password',
    ];

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
}