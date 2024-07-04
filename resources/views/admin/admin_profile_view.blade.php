
@extends('admin.admin_master')
@section('admin')

<div class="container-full">

   
    <section class="content">
        <div class="row">
            @if (session('success'))

            <div class="alert alert-primary alert-dismissible fade show" role="alert" id="success-alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-black">
                  <h3 class="widget-user-username">Admin Name:  {{$adminData->name}}</h3>
                  <a href="{{route('admin.profile.edit')}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Edit Profile</a>
                  <h6 class="widget-user-desc">Email:  {{$adminData->email}}</h6>
                </div>
                <div class="widget-user-image">
                  <img class="rounded-circle" src="{{(!empty($adminData->profile_photo_path)) ? url('upload/admin_images/'.$adminData->profile_photo_path) : url('upload/no_image.jpg')}}" alt="User Avatar">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">12K</h5>
                        <span class="description-text">FOLLOWERS</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 br-1 bl-1">
                      <div class="description-block">
                        <h5 class="description-header">550</h5>
                        <span class="description-text">FOLLOWERS</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">158</h5>
                        <span class="description-text">TWEETS</span>
                      </div>
                      <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
              </div>

        </div>
    </section>
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