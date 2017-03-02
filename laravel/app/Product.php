<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'products';

    protected $fillable = [
        'name', 'description', 'images', 'price', 'category_id','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
