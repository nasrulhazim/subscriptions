<?php

Route::group(['middleware' => ['auth']], function () {
    Route::resource('subscriptions', '\CleaniqueCoders\Http\Controllers\SubscriptionController');
});
