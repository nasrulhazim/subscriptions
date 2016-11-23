<?php

Route::group(['middleware' => ['auth']], function () {
    Route::resource('subscriptions', 'SubscriptionController');
});
