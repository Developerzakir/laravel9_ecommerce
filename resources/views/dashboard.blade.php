@extends('frontend.front_master')
@section('front')

<div class="body-content">
    <div class="container">
        <div class="row">
            @if (session('success'))

            <div class="alert alert-primary alert-dismissible fade show" role="alert" id="success-alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="col-md-2"><br><br>
                <img class="card-img-top" src="{{(!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path) : url('upload/no_image.jpg')}}" style="width:100%; height:100%;" alt=""><br>
                <ul class="list-group list-group-flush">
                    <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{route('user.profile')}}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{route('user.change.password')}}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">Hi.... </span>
                            <strong>{{Auth::user()->name}}</strong> 
                            Welcome to E-commerce Shop
                        
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Auto-hide script -->
<script>
    $(document).ready(function() {
        // Auto-hide after 5 seconds
        setTimeout(function() {
            $('#success-alert').fadeOut('slow'); // Use 'slow' for a gradual fade
        }, 3000); // 3000 milliseconds = 3 seconds
    });
</script>
    
@endsection