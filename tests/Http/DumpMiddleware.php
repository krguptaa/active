<?php

namespace Krgupta\ActiveTest\Http;

use Closure;

class DumpMiddleware
{
    /**
     * Run the request filters.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return '';
    }
}
