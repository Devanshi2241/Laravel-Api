<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TokenModel extends Model
{
    protected $table = 'tokens';
    protected $fillable = [
         'id', 'email','user_id','tokens',
    ];

}
