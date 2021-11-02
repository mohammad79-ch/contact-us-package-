<?php

use Contact\Form\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::namespace("Contact/Form/Http/Controller")->group(function (){
    Route::get("/contact",[ContactController::class,"viewContact"]);
    Route::post("/contact",[ContactController::class,"send"])->name("contact.send");
});
