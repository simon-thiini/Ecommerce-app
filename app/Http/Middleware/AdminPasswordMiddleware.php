<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPasswordMiddleware
{
   public function handle($request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            // Redirect to login or unauthorized page if not authenticated or not an admin
            return redirect()->route('login');
        }

        // Check for the admin password (you can customize this logic)
        $adminPassword = 'your_admin_password'; // Replace with your actual admin password

        if (!$request->session()->has('admin_authenticated') || !$request->session()->get('admin_authenticated')) {
            // If not authenticated, prompt for the password
            if ($request->input('admin_password') === $adminPassword) {
                // Password is correct, set session flag
                $request->session()->put('admin_authenticated', true);
            } else {
                // Password is incorrect, redirect back to the admin login page
                return redirect()->route('admin.login')->with('error', 'Incorrect password.');
            }
        }

        return $next($request);
    }
}
