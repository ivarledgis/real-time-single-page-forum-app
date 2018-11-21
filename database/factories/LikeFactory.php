<?php

use Faker\Generator as Faker;
use App\User;
use App\Reply;

$factory->define(App\Like::class, function (Faker $faker) {
    return [
    	'reply_id' => function(){
        	return Reply::all()->random();
        },
        'user_id' => function() {
        	return User::all()->random();
        }        
    ];
});
