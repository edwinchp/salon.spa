<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $guarded = [];

    public static function getCategoriesList(){
        $cat = DB::table('categories')->get('title');
        $categories = [];
        foreach($cat as $c){
            array_push($categories, $c->title);
        }

        return $categories;
    }

}
