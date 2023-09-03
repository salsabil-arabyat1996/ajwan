@extends('Admin.layouts.App')
@section('content')



<div class="container" style="height: 100vh"  >
<table class="table"  >

  <div class="row align-items-start" style="margin-top: 20px"  >
    <div class="col">
   <a  class="btn btn-primary" href="{{ route('course.create') }}">Create</a>
    </div>
   
  </div>
    
      @if ($message = session()->get('success'))
      <div class="alert alert-success" role="alert">
          {{ $message }}
      </div>
  @endif

    <div class="table-responsive"  >
      <table class="table table-striped table-hover	table-borderless table-primary align-middle">
        <thead class="table-light">
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>description</th>
            <Th>image</Th>
            <th>price</th>
            <th>location</th>
            <th>start</th>
            <th>end</th>
            <th>time</th>
            <th>Target group</th>
            <th>status</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($courses as $item )

            <tr class="table-primary" >
              <td scope="row">Item</td>
              <td>{{ $item->id }}</td>
              <td>{{ $item->Title}}</td>
              <td>{{ $item->description }}</td>
              <td><img src="imagess/{{ $item->image }}" alt=""></td>
              <td>{{ $item->price }}</td>
              <td>{{ $item->location }}</td>
              <td>{{ $item->start }}</td>
              <td>{{ $item->end }}</td>
              <td>{{ $item->time }}</td>
              <td>{{ $item->Targetgroup }}</td>
              <td>{{ $item->status }}</td>
              <td>
                <form action="{{ route('courses.destroy',$item->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Delete</button>
                </form>
                <a href="{{ route('Admin.courses.edit',$item->id) }}" class="btn btn-primary"  >Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            
          </tfoot>
      </table>
      {{-- {!! $courses->links()   !!} --}}
    
  </div>
 
@endsection