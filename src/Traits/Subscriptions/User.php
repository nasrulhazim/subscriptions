<?php

namespace CleaniqueCoders\Traits\Subscriptions;

trait User
{
    public function subscriptions()
    {
        return $this->belongsToMany('CleaniqueCoders\Subscription');
    }
}
