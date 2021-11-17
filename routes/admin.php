<?php

Route::name('customPage')->get('/customPage', [\App\Http\Controllers\Admin\ExampleController::class, 'index']);
