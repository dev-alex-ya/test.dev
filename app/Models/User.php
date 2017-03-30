<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
*sdf
*/

class User extends Model
{
  protected $table = 'users'; //привязываем таблицу из БД к классу
  protected $fillable = ['email','name','password'];//разрешаем добавление в эти поля
}
