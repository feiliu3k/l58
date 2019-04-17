<?php

namespace App\Models;

class Channel extends Model {
	protected $table = 'channels';

	protected $fillable = ['name', 'thumbnail', 'order', 'dept_id', 'rebellion'];

	public function posts() {
		return $this->hasMany('App\Models\Post', 'ch_id', 'id');
	}

	public function department() {
		return $this->belongsTo('App\Models\Department', 'dept_id', 'id');
	}

	public function users() {
		return $this->belongsToMany('App\Models\User', 'channel_user', 'ch_id', 'user_id');
	}
}
