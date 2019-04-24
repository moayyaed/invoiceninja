<?php

namespace App\Http\Middleware;

use App\Libraries\MultiDB;
use Closure;
use Hashids\Hashids;

/**
 * Class UrlSetDb
 * @package App\Http\Middleware
 */
class UrlSetDb
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

        if (config('ninja.db.multi_db_enabled'))
        {
            $hashids = new Hashids('', 10); //decoded output is _always_ an array.

            //parse URL hash and set DB
            $segments = explode("-", $request->route('confirmation_code'));

            $hashed_db = $hashids->decode($segments[0]);

            MultiDB::setDB(MultiDB::DB_PREFIX . str_pad($hashed_db[0],  2 , "0", STR_PAD_LEFT));
        }

        return $next($request);
    }
}