<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountGroup extends Model
{
    use HasFactory;
    protected $table = 'account_groups';

    public function account()
    {
        return $this->hasMany(account::class, 'IdGroup', 'idGroup');
    }
}
