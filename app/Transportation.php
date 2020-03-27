<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
  protected $table = 'transportations';
  protected $fillable = ['account_id', 'number', 'type', 'model'];
  
  public function userInfo(){
    return $this->hasMany('App\UserInformation', 'account_id', 'account_id');
  }
}