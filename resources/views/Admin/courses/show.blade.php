@extends('Admin.layoute.App')
@section('content')
<style>
span{
  font-size: larger;
  color: #000;
}

</style>


<div class="container" style="height: 160vh;">
    <div class="row mt-4">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('course.index') }}">Back</a>
        </div>
    </div>
    <div style="display: flex; justify-content: center; "  >
        <div class="card mb-3" style="width: 300px; height: 200px; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.529)">
            <img src="/imagess/{{ $course->image }}" style="object-fit: cover; width: 100%; height: 100%;">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-text"><span>Title:</span> {{ $course->title }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-text"><span>Teacher Name:</span> {{ $course->teacher_name }}</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-text"><span>Description:</span> {{ $course->description }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-text"><span>Price:</span> {{ $course->price }}</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Add similar rows for other fields -->

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-text"><span>Location:</span> {{ $course->location }}</h5>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-text"><span>Start Time:</span> {{ $course->start }}</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Continue adding rows and cards for other fields -->

    <div class="row mt-4">
      <div class="col-md-6">
          <div class="card" style="width: 100%;">
              <div class="card-body">
                  <h5 class="card-text"><span>Time end:</span> {{ $course->end }}</h5>
              </div>
          </div>
      </div>

      <div class="col-md-6">
          <div class="card" style="width: 100%;">
              <div class="card-body">
                  <h5 class="card-text"><span>Duration of the course:</span> {{ $course->time }}</h5>
              </div>
          </div>
      </div>
  </div>
<!-- Continue adding rows and cards for other fields -->
  <div class="row mt-4">
    <div class="col-md-6">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-text"><span>Target group:</span> {{ $course->Target_group }}</h5>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card" style="width: 100%;">
            <div class="card-body">

                <h5 class="card-text"><span>Status:</span> @if ($course->status == 0 )
                  Visible
                  @else
                  Hidden
                @endif </h5>

            </div>
        </div>
    </div>
</div>
   
    <!-- Continue adding rows and cards for other fields -->
    
   
</div>
@endsection
