<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Contact
 */
class Contact extends Model {
    protected $table = 'contacts';
    protected $fillable = ['name', 'email', 'phone', 'address', 'photo'];
}
