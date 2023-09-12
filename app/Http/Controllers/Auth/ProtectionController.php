<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProtectionController extends Controller
{
    /**
     * Create a new ProtectionController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Check if the user is authenticated
        if (auth()->check()) {
            $role = auth()->user()->role_as;

            // Check the user's role
            if ($role == 0) {
                return view('/User.Home'); // Adjust view name to lowercase and use dot notation
            } elseif ($role == 1) {
                return view('admin.index'); // Adjust view name to lowercase and use dot notation
            }
        }

        // Handle other cases (e.g., user not authenticated or invalid role)
        return redirect('/'); // Redirect to a default page
    }
}
