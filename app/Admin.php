<?php
/**
 * Created by PhpStorm.
 * User: arlex
 * Date: 2017/6/13
 * Time: 15:02
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //指定表名，对象关系映射
    protected $table = 'admin';

    //指定主键
    protected $primaryKey = 'id';



}