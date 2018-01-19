<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Products.
 *
 * @package namespace App\Entities;
 */
class Products extends Model implements Transformable
{
    use TransformableTrait;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'products';
    protected $fillable = ['name','description','image','price','id_category'];


    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class,'id_category','id');

    }

}
