@extends('layout.authLay')

@section('content')

<!-- sidebar -->

<div id="mySidebar" class="sidebar ">
  <a href="javascript:void(0)" class="closebtn" onclick="toggleNav()">×</a>
  


  <a href="#">Dashboard</a>
  <a href="#">Members</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main" class=" shadow-sm">

  <button class="openbtn" onclick="toggleNav()">
  <i class="bi bi-list"></i>
  </button>  

</div>

<div class="content" id ="content" >  
    <h1>dsfsf</h1>
</div>




<script>

function toggleNav() {
  const sidebar = document.getElementById("mySidebar");
  const main = document.getElementById("main");
  const content = document.getElementById("content");
  
  // Check if the sidebar is currently open or closed
  if (sidebar.style.width === "250px") {
    // If open, close it
    sidebar.style.width = "0";
    main.style.marginLeft = "0";
    content.style.marginLeft = "0";
    
  } else {
    // If closed, open it
    sidebar.style.width = "250px";
    main.style.marginLeft = "250px";
    content.style.marginLeft = "250px";
  }
}

// function openNav() {
//   document.getElementById("mySidebar").style.width = "250px";
//   document.getElementById("main").style.marginLeft = "250px";
// }

// function closeNav() {
//   document.getElementById("mySidebar").style.width = "0";
//   document.getElementById("main").style.marginLeft= "0";
// }

</script>

<!-- top bar -->



<!-- body contente -->


   
@endsection
