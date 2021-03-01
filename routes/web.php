<?php

use Illuminate\Support\Facade\Route;

Route::get("/mypacket", function(){
	return "My packet work!";
});