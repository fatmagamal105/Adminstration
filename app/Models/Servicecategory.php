<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicecategory extends Model
{
    protected $table = 'servicecategory';

    protected $filllable =['service_name', 'service_description',  'status'];
}
