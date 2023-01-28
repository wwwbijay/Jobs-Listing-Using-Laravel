<?php

use App\Models\Jobs;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Get all job listings
Route::get('/', function () {
    return view('home',[
        'heading' => 'Job Networks',
        'jobs' => Jobs::all()
         
    ]);
});

//Get single job listing
Route::get('/jobs/{id}', function ($id) {
    return view('job-single',[
        'job' => Jobs::find($id)
         
    ]);
});