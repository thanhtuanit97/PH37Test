<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable =[
    	'name','qty','category_id',
    ];

    public function category()
    {
    	return $this->belongsTo('App\Category','category_id', 'id');
    }
}
