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
        'email', 'username', 'password',
    ];

    /**
     * Get the goals associated with the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\Goal>
     */
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
}
