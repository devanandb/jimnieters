<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	// Relation to category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    // public function subscribe()
    // {
    // 	$this->subscriptions()->create([
    // 		'name' => 'Dev',
    // 		'email' => 'devanand.b@hpe.com',
    // 		'article_id' => '2',
    // 		'channel' => 'all'
    // 	]);
    // }

    // public function subscriptions()
    // {
    // 	return $this->hasMany('App\Subscription');
    // }
}
