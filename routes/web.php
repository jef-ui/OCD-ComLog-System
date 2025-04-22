<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\RequisitionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Radio Logs

Route::get('/log',[LogController::class,'index'])->name('log.index');
Route::get('/log/create',[LogController::class,'create'])->name('log.create');
Route::post('/log',[LogController::class,'store'])->name('log.store');
Route::get('/log/{log}/edit',[LogController::class,'edit'])->name('log.edit');
Route::put('/log/{log}/update', [LogController::class, 'update'])->name('log.update');
Route::delete('/log/{log}/delete',[LogController::class,'delete'])->name('log.delete');


//Incomming Communcations

Route::get('/document',[DocumentController::class,'index'])->name('document.index');
Route::get('/document/create',[DocumentController::class,'create'])->name('document.create');
Route::post('/document',[DocumentController::class,'store'])->name('document.store');
Route::get('/document/{id}/view', [DocumentController::class, 'show'])->name('document.show');
Route::get('/document/{document}/edit', [DocumentController::class, 'edit'])->name('document.edit');
Route::put('/document/{document}/update', [DocumentController::class, 'update'])->name('document.update');
Route::delete('/document/{document}/delete', [DocumentController::class, 'delete'])->name('document.delete');

//Requisitions

Route::get('/requisition', [RequisitionController::class,'index'])->name('requisition.index');
Route::get('/requisition/create', [RequisitionController::class, 'create'])->name('requisition.create');
Route::post('/requisition', [RequisitionController::class, 'store'])->name('requisition.store');
Route::get('/requisition/{requisition}/preview', [RequisitionController::class, 'preview'])->name('requisition.preview');
    Route::get('/requisition/{requisition}/download', [RequisitionController::class, 'downloadPdf'])->name('requisition.download');








