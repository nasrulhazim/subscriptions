<?php

namespace CleaniqueCoders;

use Illuminate\Database\Eloquent\Model;

class SubscriptionUser extends Model
{
    protected $table = 'subscription_user';

    protected $dates = [
        'subscribed_at',
        'expired_at',
        'created_at',
        'updated_at',
    ];
}
