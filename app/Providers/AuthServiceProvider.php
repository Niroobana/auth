<?php

namespace App\Providers;
use App\Course;
use App\TargetGroup;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerCoursePolicies();
        $this->registerTarget_groupPolicies();
    }
    public function registerCoursePolicies()
    {
        Gate::define('create-course', function ($user) {
            return $user->hasAccess(['create-course']);
        });
        Gate::define('update-course', function ($user, Course $course) {
            return $user->hasAccess(['update-course']) or $user->id == $course->user_id;
        });
        Gate::define('delete-course', function ($user) {
            return $user->hasAccess(['delete-course']);
        });

    }

    public function registerTarget_groupPolicies()
    {
        Gate::define('create-Target_group', function ($user) {
            return $user->hasAccess(['create-Target_group']);
        });
        Gate::define('update-Target_group', function ($user, TargetGroup $target_group) {
            return $user->hasAccess(['update-Target_group']) or $user->id == $target_group->user_id;
        });
        Gate::define('delete-Target_group', function ($user) {
            return $user->hasAccess(['delete-Target_group']);
        });
        Gate::define('see-all-drafts', function ($user) {
            return $user->inRole('admin');
        });
    }
}
