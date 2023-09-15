<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\Employes\Employee;
use App\Http\Livewire\Admin\Employes\EmployeeCreate;
use App\Http\Livewire\Admin\Employes\EmployeeEditProfile;




Route::middleware(['auth', 'user-role:humanresources'])->group(function () {

    Route::get('/medewerker/{employee}',EmployeeEditProfile::class)->name('employee.edit');
    Route::get('/medewerkers',Employee::class)->name('employee.index');
    Route::get('/medewerkeraanmaken',EmployeeCreate::class)->name('employee.create');

});



Route::middleware(['auth', 'user-role:management,humanresources,admin'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'admin']);
});