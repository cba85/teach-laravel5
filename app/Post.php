<?php

namespace Learn;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
        'title',
        'body'
    ];

    protected $dates = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
