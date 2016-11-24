<?php

Route::group(['middleware' => ['auth']], function () {
    Route::resource('subscriptions', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController');
});
