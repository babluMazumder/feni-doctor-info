<?php

namespace App\Providers;

use App\Interfaces\AuthInterface;
use App\Models\Backend\Ambulance;
use App\Models\Backend\BloodDonor;
use App\Repositories\AuthRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Role\RoleInterface;
use App\Repositories\Todo\TodoInterface;
use App\Repositories\User\UserInterface;
use App\Repositories\Role\RoleRepository;
use App\Repositories\Todo\TodoRepository;
use App\Repositories\User\UserRepository;
use App\Repositories\Doctor\DoctorInterface;
use App\Repositories\Upload\UploadInterface;
use App\Repositories\Doctor\DoctorRepository;
use App\Repositories\Upload\UploadRepository;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Hospital\HospitalInterface;
use App\Repositories\Language\LanguageInterface;
use App\Repositories\Settings\SettingsInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Hospital\HospitalRepository;
use App\Repositories\Language\LanguageRepository;
use App\Repositories\Settings\SettingsRepository;
use App\Repositories\Ambulance\AmbulanceInterface;
use App\Repositories\BloodBank\BloodBankInterface;
use App\Repositories\ContactUs\ContactUsInterface;
use App\Repositories\Ambulance\AmbulanceRepository;
use App\Repositories\BloodBank\BloodBankRepository;
use App\Repositories\ContactUs\ContactUsRepository;
use App\Repositories\BloodDonor\BloodDonorInterface;
use App\Repositories\BloodDonor\BloodDonorRepository;
use App\Repositories\LoginActivity\LoginActivityInterface;
use App\Repositories\LoginActivity\LoginActivityRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoginActivityInterface::class,         LoginActivityRepository::class);

        $this->app->bind(SettingsInterface::class,              SettingsRepository::class);

        $this->app->bind(LanguageInterface::class,              LanguageRepository::class);

        $this->app->bind(UploadInterface::class,                UploadRepository::class);

        $this->app->bind(AuthInterface::class,                  AuthRepository::class);

        $this->app->bind(UserInterface::class,                  UserRepository::class);

        $this->app->bind(RoleInterface::class,                  RoleRepository::class);

        $this->app->bind(TodoInterface::class,                  TodoRepository::class);
        $this->app->bind(HospitalInterface::class,                  HospitalRepository::class);
        $this->app->bind(BloodBankInterface::class,                  BloodBankRepository::class);
        $this->app->bind(BloodDonorInterface::class,                  BloodDonorRepository::class);
        $this->app->bind(AmbulanceInterface::class,                  AmbulanceRepository::class);
        $this->app->bind(ContactUsInterface::class,                  ContactUsRepository::class);
        $this->app->bind(CategoryInterface::class,                  CategoryRepository::class);
        $this->app->bind(DoctorInterface::class,                  DoctorRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
