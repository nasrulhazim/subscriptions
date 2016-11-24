<?php

namespace CleaniqueCoders\Subscription\Traits\Subscriptions;

trait User
{
    public function subscriptions()
    {
        return $this->belongsToMany('CleaniqueCoders\Subscription');
    }
}
