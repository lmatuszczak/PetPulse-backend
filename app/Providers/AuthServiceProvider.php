<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Animal;
use App\Models\AnimalType;
use App\Models\Breed;
use App\Models\Calendar;
use App\Models\MedicalTreatment;
use App\Models\Owner;
use App\Models\Role;
use App\Models\Test;
use App\Models\User;
use App\Policies\AnimalPolicy;
use App\Policies\BreedPolicy;
use App\Policies\CalendarPolicy;
use App\Policies\MedicalTreatmentPolicy;
use App\Policies\OwnerPolicy;
use App\Policies\RolePolicy;
use App\Policies\TestPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Animal::class => AnimalPolicy::class,
        Role::class => RolePolicy::class,
        AnimalType::class => AnimalPolicy::class,
        Breed::class => BreedPolicy::class,
        Calendar::class => CalendarPolicy::class,
        MedicalTreatment::class => MedicalTreatmentPolicy::class,
        Owner::class => OwnerPolicy::class,
        Test::class => TestPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
