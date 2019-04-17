<?php

namespace App\Models;

use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmailContract {
	use HasRoles, Notifiable, MustVerifyEmailTrait;

	protected $fillable = [
		'name', 'email', 'password', 'introduction',
	];

	protected $hidden = [
		'password', 'remember_token',
	];
}
