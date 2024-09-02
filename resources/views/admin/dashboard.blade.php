@extends('layout.authLay') @section('content')

<!-- sidebar -->
@include('layout.sidebar')

<!-- top bar -->
@include('layout.topbar')

<!-- body contente -->



<div class="content" id="content">
    <div class="dashboard_container" id="dashboard_container">

      {{-- add dashboard content here! --}}



        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor modi
            magni, et rerum molestias numquam alias esse quod tenetur dolore
            pariatur, assumenda, nobis aspernatur. Possimus molestiae deserunt
            vero odit commodi! lore Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Optio laudantium suscipit repellendus, voluptatem
            fuga mollitia adipisci exercitationem enim asperiores, quas facere?
            Atque dolorum minima, dolore dolorem voluptatem nobis officiis?
            Expedita.
        </p>




    </div>
</div>

{{-- toggle menue scrippt --}}

<script>
    function toggleNav() {
        const sidebar = document.getElementById("mySidebar");
        const main = document.getElementById("main");
        const content = document.getElementById("content");

        // Check if the sidebar is currently open or closed
        if (sidebar.style.width === "250px" || sidebar.style.width === "") {
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
</script>




@endsection
