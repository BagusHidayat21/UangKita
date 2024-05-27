<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    public $fillable =
    [
        'user_id','name', 'jumlah','target', 'catatan', 'kategori'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
