<?php

// allow public user to see, but require registration upon subscribe
Route::get('subscribe', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@subscribe')->name('subscriptions.subscribe');

// must be registered user
Route::group(['middleware' => ['auth']], function () {
    Route::get('expired', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@expired')->name('subscriptions.expired');
    Route::get('unsubscribed', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController@unsubscribed')->name('subscriptions.unsubscribed');
});

// to access to internal subscription modules, can enhance to allow only particular roles
Route::group(['middleware' => ['auth', 'subscription']], function () {
    Route::resource('subscriptions', '\CleaniqueCoders\Subscription\Http\Controllers\SubscriptionController');
});
