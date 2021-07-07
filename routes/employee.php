<?php


use Illuminate\Support\Facades\Route;

Route::middleware(['auth:employee'])->prefix('employee')->name('employee.')->group(function (){

//    Reservation
    Route::get('reservations', [\App\Http\Controllers\ReservationController::class, 'allReservations'])->name('reservations');
    Route::get('reservation/validate/{reservation}', [\App\Http\Controllers\ReservationController::class, 'valide'])->name('reservation.validate');
    Route::get('reservation/revoked/{reservation}', [\App\Http\Controllers\ReservationController::class, 'revoke'])->name('reservation.revoke');
    Route::get('reservation/ended/{reservation}', [\App\Http\Controllers\ReservationController::class, 'ended'])->name('reservation.ended');
//    Profile
    Route::get('profiles', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('profiles');
    Route::get('profile/show/{employee}', [\App\Http\Controllers\EmployeeController::class, 'show'])->name('profile.show');
    Route::get('profile/create', [\App\Http\Controllers\EmployeeController::class, 'create'])->name('profile.create');
    Route::post('profile/store', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('profile.store');
    Route::get('profile/edit/{employee}', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('profile.edit');
    Route::post('profile/update/{employee}', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('profile.update');
    Route::get('profile/delete/{employee}', [\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('profile.delete');

//    Roles and Permission
    Route::get('roles-permissions', [\App\Http\Controllers\RolePermissionController::class, 'index'])->name('roles-permissions');

//    Roles
    Route::get('role/create', [\App\Http\Controllers\RoleController::class, 'create'])->name('role.create');
    Route::post('role/store', [\App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
    Route::get('role/edit/{role}', [\App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
    Route::post('role/update/{role}', [\App\Http\Controllers\RoleController::class, 'update'])->name('role.update');
    Route::get('role/delete/{role}', [\App\Http\Controllers\RoleController::class, 'destroy'])->name('role.delete');

//    Permissions
    Route::get('permission/create', [\App\Http\Controllers\PermissionController::class, 'create'])->name('permission.create');
    Route::post('permission/store/', [\App\Http\Controllers\PermissionController::class, 'store'])->name('permission.store');
    Route::get('permission/edit/{permission}', [\App\Http\Controllers\PermissionController::class, 'edit'])->name('permission.edit');
    Route::post('permission/update/{permission}', [\App\Http\Controllers\PermissionController::class, 'update'])->name('permission.update');
    Route::get('permission/delete/{permission}', [\App\Http\Controllers\PermissionController::class, 'destroy'])->name('permission.delete');

//      Services

    Route::get('/services', [\App\Http\Controllers\ServiceController::class, 'index'])->name('services');
    Route::get('/service/create', [\App\Http\Controllers\ServiceController::class, 'create'])->name('service.create');
    Route::get('/service/show/{service}', [\App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');
    Route::post('/service/store', [\App\Http\Controllers\ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/edit/{service}', [\App\Http\Controllers\ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{service}', [\App\Http\Controllers\ServiceController::class, 'update'])->name('service.update');
    Route::get('/service/delete/{service}', [\App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.delete');

    //    Departement
    Route::get('departements', [\App\Http\Controllers\DepartementController::class, 'index'])->name('departements');
    Route::get('departement/create', [\App\Http\Controllers\DepartementController::class, 'create'])->name('departement.create');
    Route::post('departement/store', [\App\Http\Controllers\DepartementController::class, 'store'])->name('departement.store');
    Route::get('departement/edit/{departement}', [\App\Http\Controllers\DepartementController::class, 'edit'])->name('departement.edit');
    Route::post('departemens/update/{departement}', [\App\Http\Controllers\DepartementController::class, 'update'])->name('departement.update');
    Route::get('departement/delete/{departement}', [\App\Http\Controllers\DepartementController::class, 'destroy'])->name('departement.delete');

    //    Days
    Route::get('days', [\App\Http\Controllers\DayController::class, 'index'])->name('days');
    Route::get('day/create', [\App\Http\Controllers\DayController::class, 'create'])->name('day.create');
    Route::post('day/store', [\App\Http\Controllers\DayController::class, 'store'])->name('day.store');
    Route::get('day/show/{day}', [\App\Http\Controllers\DayController::class, 'show'])->name('day.show');
    Route::get('day/edit/{day}', [\App\Http\Controllers\DayController::class, 'edit'])->name('day.edit');
    Route::post('day/update/{day}', [\App\Http\Controllers\DayController::class, 'update'])->name('day.update');
    Route::get('day/delete/{day}', [\App\Http\Controllers\DayController::class, 'destroy'])->name('day.delete');


    //    Horaires
    Route::get('horaires', [\App\Http\Controllers\HoraireController::class, 'index'])->name('horaires');
    Route::get('horaire/create', [\App\Http\Controllers\HoraireController::class, 'create'])->name('horaire.create');
    Route::post('horaire/store', [\App\Http\Controllers\HoraireController::class, 'store'])->name('horaire.store');
    Route::get('horaire/show/{horaire}', [\App\Http\Controllers\HoraireController::class, 'show'])->name('horaire.show');
    Route::get('horaire/edit/{horaire}', [\App\Http\Controllers\HoraireController::class, 'edit'])->name('horaire.edit');
    Route::post('horaire/update/{horaire}', [\App\Http\Controllers\HoraireController::class, 'update'])->name('horaire.update');
    Route::get('horaire/delete/{horaire}', [\App\Http\Controllers\HoraireController::class, 'destroy'])->name('horaire.delete');


});
