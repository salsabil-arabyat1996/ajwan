<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Category;

class SinglePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $courses = Course::all();
        $categories = Category::pluck('name', 'id');
        return view('User.Home',compact('courses', 'categories'));


    }

    public function show(string $id )
    {
        $course = Course::findOrFail($id);

        return view('User.singlepage', compact('course'));
    }

}
