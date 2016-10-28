<?php

namespace App\PhoneBook;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table    ='contacts';

    protected $fillable    = ['name', 'phone', 'notes','user_id'];

    protected $hidden    = ['password', 'remember_token'];
}
