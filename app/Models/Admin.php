<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Admin extends Model implements Authenticatable
{

    use BasicAuthenticatable;
    protected $fillable = ['name', 'email','password', 'token', 'image', 'role', 'status'];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
