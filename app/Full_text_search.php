<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Full_text_search extends Model
{
   use Notifiable;
   use SearchableTrait;

   protected $searchable = [
       'columns' => [
           'full_text_searches.Name' => 10,
           'full_text_searches.Category' => 10

       ]
   ];

   protected $guarded = [];

}
