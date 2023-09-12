@extends('Admin.layouts.App')
@section('content')
<div class="container" style="height: 160vh"  >
    <div class="row align-items-start" style="margin-top: 20px"  >
        <div class="col">
       <a  class="btn btn-primary" href="{{ route('categories.index') }}">Back</a>
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

<form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data"  >
@csrf

<div class="mb-3">
    <label for="">name:</label>
  <input type="text"
    class="form-control" name="name"  >
</div>
<div class="mb-3">
    <label for="">description:</label>
  <textarea class="form-control" name="description"   rows="3"></textarea>
</div>
<div class="mb-3">
    <label for="">image:</label>
  <input type="file" class="form-control"  name="image" >
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>


</div>


@endsection
