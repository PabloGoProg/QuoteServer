<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $fillable =[
        'message',
        'author',
        'published_year',
    ];
    use BelongsTo;

    public function user () {
        $this->belongsTo(User::class);
    }
}
