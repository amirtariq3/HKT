<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $fillable = [
        'title', 'image', 'short_detail', 'description', 'member_id', 'news_category_id', 'shares', 'status'
    ];

    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\NewsCategory', 'news_category_id');
    }
}
