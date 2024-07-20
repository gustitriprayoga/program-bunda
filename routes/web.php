<?php

use App\Http\Controllers\AcutePainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IneffectiveController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\HypervolemiaController;
use App\Http\Controllers\AnxietyController;
use App\Http\Controllers\RiskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::prefix('/pasien')->group(function () {
    Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::post('/store', [PasienController::class, 'store'])->name('pasien.store');
    Route::get('/show/{id}', [PasienController::class, 'show'])->name('pasien.show');
    Route::get('/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
    Route::delete('/destroy/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
});

// AcutePain Plan
Route::prefix('/patient-plan/Acute-pain')->group(function () {
    Route::get('/', [AcutePainController::class, 'index'])->name('pasien.plan.acutepain.index');
    Route::get('/create', [AcutePainController::class, 'create'])->name('pasien.plan.acutepain.create');
    Route::post('/store', [AcutePainController::class, 'store'])->name('pasien.plan.acutepain.store');
    Route::get('/show/{id}', [AcutePainController::class, 'show'])->name('pasien.plan.acutepain.show');
    Route::get('/edit/{id}', [AcutePainController::class, 'edit'])->name('pasien.plan.acutepain.edit');
    Route::put('/update/{id}', [AcutePainController::class, 'update'])->name('pasien.plan.acutepain.update');
    Route::delete('/destroy/{id}', [AcutePainController::class, 'destroy'])->name('pasien.plan.acutepain.destroy');
});

// Ineffective Plan
Route::prefix('/patient-plan/Ineffective')->group(function () {
    Route::get('/', [IneffectiveController::class, 'index'])->name('pasien.plan.ineffective.index');
    Route::get('/create', [IneffectiveController::class, 'create'])->name('pasien.plan.ineffective.create');
    Route::post('/store', [IneffectiveController::class, 'store'])->name('pasien.plan.ineffective.store');
    Route::get('/show/{id}', [IneffectiveController::class, 'show'])->name('pasien.plan.ineffective.show');
    Route::get('/edit/{id}', [IneffectiveController::class, 'edit'])->name('pasien.plan.ineffective.edit');
    Route::put('/update/{id}', [IneffectiveController::class, 'update'])->name('pasien.plan.ineffective.update');
    Route::delete('/destroy/{id}', [IneffectiveController::class, 'destroy'])->name('pasien.plan.ineffective.destroy');
});


// Hypervolemia Plan
Route::prefix('/patient-plan/Hypervolemia')->group(function () {
    Route::get('/', [HypervolemiaController::class, 'index'])->name('pasien.plan.hypervolemia.index');
    Route::get('/create', [HypervolemiaController::class, 'create'])->name('pasien.plan.hypervolemia.create');
    Route::post('/store', [HypervolemiaController::class, 'store'])->name('pasien.plan.hypervolemia.store');
    Route::get('/show/{id}', [HypervolemiaController::class, 'show'])->name('pasien.plan.hypervolemia.show');
    Route::get('/edit/{id}', [HypervolemiaController::class, 'edit'])->name('pasien.plan.hypervolemia.edit');
    Route::put('/update/{id}', [HypervolemiaController::class, 'update'])->name('pasien.plan.hypervolemia.update');
    Route::delete('/destroy/{id}', [HypervolemiaController::class, 'destroy'])->name('pasien.plan.hypervolemia.destroy');
});

// Anxiety Plan
Route::prefix('/patient-plan/Anxiety')->group(function () {
    Route::get('/', [AnxietyController::class, 'index'])->name('pasien.plan.anxiety.index');
    Route::get('/create', [AnxietyController::class, 'create'])->name('pasien.plan.anxiety.create');
    Route::post('/store', [AnxietyController::class, 'store'])->name('pasien.plan.anxiety.store');
    Route::get('/show/{id}', [AnxietyController::class, 'show'])->name('pasien.plan.anxiety.show');
    Route::get('/edit/{id}', [AnxietyController::class, 'edit'])->name('pasien.plan.anxiety.edit');
    Route::put('/update/{id}', [AnxietyController::class, 'update'])->name('pasien.plan.anxiety.update');
    Route::delete('/destroy/{id}', [AnxietyController::class, 'destroy'])->name('pasien.plan.anxiety.destroy');
});

// Risk Plan
Route::prefix('/patient-plan/Risk')->group(function () {
    Route::get('/', [RiskController::class, 'index'])->name('pasien.plan.risk.index');
    Route::get('/create', [RiskController::class, 'create'])->name('pasien.plan.risk.create');
    Route::post('/store', [RiskController::class, 'store'])->name('pasien.plan.risk.store');
    Route::get('/show/{id}', [RiskController::class, 'show'])->name('pasien.plan.risk.show');
    Route::get('/edit/{id}', [RiskController::class, 'edit'])->name('pasien.plan.risk.edit');
    Route::put('/update/{id}', [RiskController::class, 'update'])->name('pasien.plan.risk.update');
    Route::delete('/destroy/{id}', [RiskController::class, 'destroy'])->name('pasien.plan.risk.destroy');
});
