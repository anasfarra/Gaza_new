<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompensationRequestController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('Gaza')->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('Gaza.dashboard');
    Route::resource('dashboard', AdminController::class)->except(['index']);
    Route::resource('all-requests', CompensationRequestController::class)->only(['index']);

    $views = [
        'admin' => [
            'dashboard-home', 'dashboard-about', 'dashboard-budget', 'dashboard-construction-tracking',
            'dashboard-content', 'dashboard-damage-map', 'dashboard-documentation', 'suppliers-management'
        ],
        'beneficiary' => [
            'beneficiaries', 'beneficiaries-home', 'beneficiaries-about', 'beneficiaries-content',
            'beneficiaries-damage-map', 'beneficiaries-order-status', 'beneficiaries-projects'
        ],
        'contractor' => [
            'Contractor', 'contractor-index', 'contractor-about', 'contractor-content',
            'contractor-damage-map', 'contractor-marketplace', 'contractor-projects'
        ],
        'donor' => [
            'DonorControl-Panel', 'donor-index', 'donor-about', 'donor-content',
            'donor-damage-map', 'donor-projects', 'donate', 'projects', 'reports'
        ],
        'supplier' => [
            'Supplier', 'supplier-index', 'supplier-about', 'supplier-content',
            'supplier-damage-map', 'supplier-marketplace', 'supplier-projects'
        ],
        'auth' => [
            'login', 'login-admin', 'login-beneficiaris', 'login-Contractor',
            'login-DonorControl-Panel', 'login-Supplier'
        ],
        'front' => [
            'index', 'about', 'budget', 'ConstructionTracking', 'content', 'damage-map',
            'documentation', 'marketplace', 'Order_status', 'projects'
        ]
    ];

    Route::get('users-management', [UserProfileController::class, 'index'])->name('Gaza.users-management');
    Route::get('projects-management', [ProjectController::class, 'index'])->name('Gaza.projects-management');
    Route::get('main-reports', [AdminController::class, 'reports'])->name('Gaza.main-reports');

    foreach ($views as $folder => $files) {
        foreach ($files as $view) {
            Route::view($view, "Gaza.$folder.$view")->name("Gaza.$view");
        }
    }
});
Route::prefix('Gaza')->group(function () {



});


