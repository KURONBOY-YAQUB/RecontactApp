<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $table = 'applications';

    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'file_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
