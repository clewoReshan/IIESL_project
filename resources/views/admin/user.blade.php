@extends('layout.authLay') @section('content')

@section('title', 'IIESL - User')

<!-- sidebar -->
@include('layout.sidebar')

<!-- top bar -->
@include('layout.topbar')



<div class="content" id="content">
    <div class="dashboard_container" id="dashboard_container">

      {{-- add dashboard content here! --}}

      <!-- Button to trigger the modal -->
       <div class="add_user_btn">

       <button type="button" class="primary_btn" data-bs-toggle="modal" data-bs-target="#myModal">
  Add User
</button>

       </div>


       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, unde. Et numquam quisquam excepturi quis non ut ab sit? Quasi numquam voluptate ut animi similique deleniti voluptatem fuga laboriosam nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae temporibus, enim explicabo odit reiciendis odio incidunt cupiditate porro animi itaque natus aspernatur voluptate illum ea voluptas maiores rem fugit similique?</p>





<!-- Modal Structure -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">APPLICATION FOR MEMBERSHIP</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


      
      
    </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>










    </div>
</div>



@endsection