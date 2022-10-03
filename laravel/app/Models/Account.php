<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';

    public function accountGroup()
    {
        return $this->belongsTo(accountGroup::class, 'IdGroup', 'Username');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'IdEmployee', 'Username');
    }
}
