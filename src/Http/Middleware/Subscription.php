<?php

namespace CleaniqueCoders\Subscription\Http\Middleware;

use Carbon\Carbon;
use CleaniqueCoders\SubscriptionUser;
use Closure;
use Illuminate\Support\Facades\Auth;

class Subscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $exist = SubscriptionUser::where('user_id', Auth::user()->id)->first();
        if (empty($exist)) {
            return redirect()->route('subscriptions.unsubscribed');
        }

        $timezone = !empty(config('app.timezone')) ? config('app.timezone') : 'Asia/Kuala_Lumpur';
        $today = Carbon::now($timezone);

        if ($today->diffInSeconds($exist->expired_at, false) < 0) {
            return redirect()->route('subscriptions.expired');
        }

        return $next($request);
    }
}
