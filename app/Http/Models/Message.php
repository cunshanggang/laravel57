<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
class Message extends  Model
{
    //指定表，如果不指定，默认连接：messages表
    protected $table = 'message';
    //定义自动写入时间戳
    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;

    //此属性决定插入和取出数据库的格式，默认datetime格式，'U'是int(10)
    protected $dateFormat = 'U';


}