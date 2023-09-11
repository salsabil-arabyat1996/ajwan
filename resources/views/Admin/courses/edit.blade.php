@extends('Admin.layoute.App')
@section('content')
<div class="container" style="height: 160vh"  >
    <div class="row align-items-start" style="margin-top: 20px"  >
        <div class="col">
       <a  class="btn btn-primary" href="{{ route('course.index') }}">Back</a>
        </div>
      </div>

      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
          <ul >
            @foreach ($errors->all() as $item)
            <li> {{ $item }}</li>
            @endforeach



          </ul>
      </div>
  @endif
<form action="{{ route('courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT') 
    <div class="mb-3">
        <label for="">title:</label>
      <input type="text"
        class="form-control" name="title" value="{{ $course->title }}" >
    </div>
    <div class="mb-3">
        <label for="">teacher_name:</label>
      <input type="text"
        class="form-control" name="teacher_name" value="{{ $course->teacher_name }}" >
    </div>
    <div class="mb-3">
        <label for="">description:</label>
      <textarea class="form-control" name="description"   rows="3">{{ $course->description }}</textarea>
    </div>
    <div  class="mb-3" >
        <label for="">price:</label>
    <input  class="form-control"  type="number" value="{{ $course->price }}" name="price" >
    </div>
    <div class="mb-3">
        <label for="">location:</label>
        <input type="text"
          class="form-control" name="location" value="{{ $course->location }}" >
      </div>
    
      <div class="mb-3">
        <label for="">start time:</label>
        <input type="date"
          class="form-control" name="start" value="{{ $course->start }}" >
      </div>
    
      <div class="mb-3">
        <label for="">end time:</label>
        <input type="date"
          class="form-control" name="end" value="{{ $course->end }}">
      </div>
    
      <div class="mb-3">
        <label for="">Duration of the course:</label>
        <input type="text"
          class="form-control" name="time" value="{{ $course->time }}">
      </div>
    
    <div class="mb-3">
        <label for="">Target group:</label>
        <input type="text"
          class="form-control" name="Target_group" value="{{ $course->Target_group }}">
      </div>
      <div class="mb-3">
        <label for="status">Status:</label>
        <select class="form-control" name="status">
            <option value="0" {{ $course->status == 0 ? 'selected' : '' }}>Visible</option>
            <option value="1" {{ $course->status == 1 ? 'selected' : '' }}>Hidden</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="category_id">Category</label>
        <select class="form-control" name="category_id" id="category_id">
            <option value="0">Select a Category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $course->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>
    
    
    
    <div class="mb-3">
        <label for="">image:</label>
      <input type="file" class="form-control"  name="image" >
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    
    
    
    
    </form>
    
    
    </div>
    
    
    @endsection
=======
    <div class="container" style="height: 200vh">
        <div class="row align-items-start" style="margin-top: 20px">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('course.index') }}">Back</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li> {{ $item }}</li>
                    @endforeach



                </ul>
            </div>
        @endif

        <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            @method('PUT')
            <div class="mb-3">
                <label for="">title:</label>
                <input type="text" class="form-control" name="title" value="{{ $course->title }}">
            </div>

            <div class="mb-3">
                <label for="">teacher name:</label>
                <input type="text" class="form-control" name="teacher_name" value="{{ $course->teacher_name }}">
            </div>

            <div class="mb-3">
                <label for="">description:</label>
                <textarea class="form-control" name="description" value="{{ $course->description }}" rows="3">{{ $course->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="">price:</label>
                <input class="form-control" type="number" value="{{ $course->price }}" name="price">
            </div>
            <div class="mb-3">
                <label for="">location:</label>
                <input type="text" class="form-control" name="location" value="{{ $course->location }}">
            </div>

            <div class="mb-3">
                <label for="">start time:</label>
                <input type="date" class="form-control" name="start" value="{{ $course->start }}">
            </div>

            <div class="mb-3">
                <label for="">end time:</label>
                <input type="date" value="{{ $course->end }}" class="form-control" name="end">
            </div>

            <div class="mb-3">
                <label for="">Duration of the course:</label>
                <input type="date" value="{{ $course->time }}" class="form-control" name="time">
            </div>

            <div class="mb-3">
                <label for="">Target group:</label>
                <input type="text" value="{{ $course->Target_group }}" class="form-control" name="Target_group">
            </div>
            {{-- ---------------? --}}
            <div class="mb-3">
                <label for="status">Status:</label>
                <select class="form-control" name="status" id="status">
                    <option value="0" {{ $course->status == 0 ? 'selected' : '' }}>Visible</option>
                    <option value="1" {{ $course->status == 1 ? 'selected' : '' }}>Hidden</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="category_id">category:</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $id => $name)
                        <option value="{{ $id }}" {{ $id == $course->category_id ? 'selected' : '' }}>
                            {{ $name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <img src="/imagess/{{ $course->image }}" style="width: 100px ;height: 100px "  >
                {{-- <label for="">image:</label> --}}
                <input type="file" class="form-control" name="image" value="{{ $course->image }}">
                
            </div>
            <button  type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
