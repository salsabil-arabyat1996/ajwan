<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function index()
    // {

    //     // $courses = Course::all();
    //     // $categories = Category::pluck('name', 'id');
    //     // return view('User.Home',compact('courses', 'categories'));


    // }
    public function index()
    {
        if (auth()->check()) {
            $role = auth()->user()->role_as;

            if ($role == 0) {
                return view('User.Home');
            } elseif ($role == 1) {
                return view('Admin.index');
            }
        }

        // Handle other cases (e.g., user not authenticated or invalid role)
        return redirect('/'); // Redirect to a default page
    }





}
