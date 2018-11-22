<?php 
Namespace app\model;

use app\model\BaseElement;
use Illuminate\Database\Eloquent\Model;

class Information extends Model  {
    protected $table = 'tb_information';
    public $timestamps = false;
}