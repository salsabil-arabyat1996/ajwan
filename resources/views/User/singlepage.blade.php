<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>single course</title>
<style>
span{
font-size: 23px;
color: #8c95f6;

}

</style>

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8c95f6;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Course</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<section id="courses">
    <div class="container-fluid  min-vh-100  d-flex flex-column"   >
        <div class="row" style="margin-top: 60px;">
            <div class="col-md-4">
                <img src="/imagess/{{ $course->image }}" class="img-fluid" style="width: 400px ;height:350px">
            </div>
            <div class="col-md-7">
                <h4 class="text-center">Course: {{ $course->title }}</h4>
                <hr>
                <h6><span>Description:</span> {{ $course->description }}</h6>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h5><span>Location:</span> {{ $course->location }}</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><span>Price:</span> {{ $course->price }}JD</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h5><span>Target group:</span> {{ $course->Target_group }}</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><span>Duration the course:</span> {{ $course->time }}</h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h5><span>Start Time:</span> {{ $course->start }}</h5>
                    </div>
                    <div class="col-md-6">
                        <h5><span>End Time:</span> {{ $course->end }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <footer class="text-center text-white" style="background-color: #0a4275;">
        <div class="container p-4 pb-0">
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Ajwan
        </div>
    </footer>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>