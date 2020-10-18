<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['cost','status','client_name','address','phone','type','delivery_id'];
}
