<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {
	/**
	 * The policy mappings for the application.
	 *
	 * @var array
	 */
	protected $policies = [
		 \App\Models\Department::class => \App\Policies\DepartmentPolicy::class,
		 \App\Models\Channel::class => \App\Policies\ChannelPolicy::class,
		// 'App\Model' => 'App\Policies\ModelPolicy',
		\App\Models\User::class => \App\Policies\UserPolicy::class,
	];

	/**
	 * Register any authentication / authorization services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->registerPolicies();

		//
	}
}
