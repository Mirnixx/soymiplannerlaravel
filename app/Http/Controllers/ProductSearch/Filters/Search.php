<?php

namespace App\Http\Controllers\ProductSearch\Filters;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Database\Eloquent\Builder;

class Search implements Filter
{
    /**
     * Apply a given search value to the builder instance.
     *
     * @param Builder $builder
     * @param mixed $value
     * @return Builder $builder
     */
    public static function apply(Builder $builder, $value)
    {
        return $builder->where(function($query) use($value){
                     return $query->where('name','like', '%'.$value.'%')
                     ->orWhere('category_name','like','%'.$value.'%')
                     ->orWhere('description','like','%'.$value.'%');
                     });

    }
}
