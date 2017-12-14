<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Usuario extends Model
{
	protected $fillable = ['nome','cpf'];
}