<?php 
namespace app\model;

use app\model\BaseElement;
use Illuminate\Database\Eloquent\Model;

class Technologie extends Model
{
    protected $table = 'tb_technologies';
    public $timestamps = false;
}