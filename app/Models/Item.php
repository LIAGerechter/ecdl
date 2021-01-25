<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Database\Eloquent\SoftDeletes;


class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
      'name', 
      'description', 
      'image', 
      'category_id', 
      'pattern',
      'stock',
      'price'
    ];

    protected $dates = [
      'created_at',
      'updated_at',
      'deleted_at',
    ];
    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

}
