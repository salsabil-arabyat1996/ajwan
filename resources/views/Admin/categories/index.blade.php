@extends('Admin.layouts.App')
@section('content')



<div class="container" style="height: 100vh"  >
<table class="table"  >

  <div class="row align-items-start" style="margin-top: 20px"  >
    <div class="col">
   <a  class="btn btn-primary" href="{{ route('categories.create') }}">Create</a>
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
            <th>Name</th>
            <th>Description</th>
            <Th>image</Th>
            <th >Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
            @foreach ($categories as $item )

            <tr class="table-primary" >
              
              <td>{{ $item->id }}</td>
              <td>{{ $item->name}}</td>
              <td>{{ $item->description }}</td>
              <td><img src="{{ asset('storage/' . $item->image) }}" width="50%" height="50vh" alt=""></td>
              <td style="display: flex;">
                <a href="{{ route('categories.edit',$item->id) }}" class="btn btn-primary"  >Edit</a>
                <form action="{{ route('categories.destroy',$item->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" >Delete</button>
                </form>
                
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
