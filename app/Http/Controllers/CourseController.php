<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Models\Category;

=======
use App\Models\Category;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

     
        $courses = Course::all();
        $categories = Category::pluck('name', 'id');
        return view('Admin.courses.index',compact('courses', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::pluck('name', 'id');

        return view('Admin.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.

     */
    public function store(Request $request)
{
    $request->validate([


$category_id = $request->input('category_id');
      
    'title'=>'required',
    'teacher_name'=>'required',
    'description'=>'required',
    'price'=>'required',
    'location'=>'required',
    'start'=>'required',
    'end'=>'required',
    'time'=>'required',
    'Target_group'=>'required',
    'status'=>'required',
    'category_id'=>'required',
    'image'=>'required |image|mimes:jpeg,png,jpg,gif|max:2048',
    
    ]);

    $input = $request ->all();
    if ($image = $request->file('image')) {
        $destinationPath ='imagess';
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move($destinationPath , $imageName);
        $input['image'] ="$imageName";
    }
    Course::create($input);
   return redirect()->route('course.index')->with('success','course added successfuly');

    // Create a new Course instance
    $course = new Course();

    if ($request->hasFile('image')) {
        $profileImg = $request->file('image');
        $profileImgPath = Storage::disk('public')->put('images', $profileImg);
        $course->image = $profileImgPath;
    }

    // Set other properties
    $course->title = $input['title'];
    $course->description = $input['description'];
    $course->price = $input['price'];
    $course->location = $input['location'];
    $course->start = $input['start'];
    $course->end = $input['end'];
    $course->time = $input['time'];
    $course->Target_group = $input['Target_group'];
    $course->teacher_name = $input['teacher_name'];
    // Set other properties as needed
$course->category_id = $category_id;
    // Save the course to the database
    $course->save();

    return redirect()->route('Admin.courses.index')->with('success','course added successfuly');
}


    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('Admin.courses.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Course $course)
    {
        $categories = Category::pluck('name', 'id');
        return view('Admin.courses.edit',compact('course','categories'));
    }

    // You can also load categories if needed
    $categories = Category::all();

    return view('Admin.courses.edit', compact('course', 'categories'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {

        // dd($request ->all());

        $request->validate([
            'title'=>'required',
            'teacher_name'=>'required',
            'description'=>'required',
            'price'=>'required',
            // 'image'=>'required |image|mimes:jpeg,png,jpg,gif|max:2048',
            'location'=>'required',
            'start'=>'required',
            'end'=>'required',
            'time'=>'required',
            'status'=>'required',
            'category_id'=>'required',
            'Target_group'=>'required',

            ]);

            $input = $request ->all();
            if ($request->hasFile('image')) {
                $profileImg = $request->file('image');
                $profileImgPath = Storage::disk('public')->put('images', $profileImg);
                $course->image = $profileImgPath;
            }
        
            $course->update($input);
           return redirect()->route('course.index')->with('success','course updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course ->delete();
        return redirect()->route('course.index')->with('success','course delete successfuly');
    }
}
