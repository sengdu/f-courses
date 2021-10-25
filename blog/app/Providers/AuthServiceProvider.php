<?php

namespace App\Providers;

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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    //Catious
    public function boot()
    {
        $this->registerPolicies();
        // check when u declard Gate 
        Gate::define('article-delete',function($user,$article){
            return $user->id == $article->user_id;
        });
        
        Gate::define('comment-delete',function($user,$comment){
            return $user->id == $comment->user_id;
        });
        //
    }
}
