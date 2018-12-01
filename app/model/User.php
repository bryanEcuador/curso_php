<?php

namespace app\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "tb_user";
    public $timestamps = false;
}