<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('/add', [ExpenseController::class, 'create'])->name('expenses.create');
Route::post('/add', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('/edit/{expense}', [ExpenseController::class, 'edit'])->name('expenses.edit');
Route::post('/edit/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');
Route::delete('/delete/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');
