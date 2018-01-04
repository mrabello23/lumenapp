<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Usuario extends Model
{
    // fields
    protected $fillable = ['nome','cpf','email'];

    // Table Name
    protected $table = 'usuarios';

    // Primary Key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}