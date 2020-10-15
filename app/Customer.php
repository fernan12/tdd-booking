<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded =[];

     function full_name()
    {

        return  $this->first_name.''.$this->middle_name.'' .$this->last_name;

    }


    }
