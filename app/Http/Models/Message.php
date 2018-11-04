<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;
class Message extends  Model
{
    protected $table = 'message';
    //定义自动写入时间戳
    public $timestamps = true;
    const CREATED_AT = 'created_at';
}