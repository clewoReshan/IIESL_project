<div class = "topBar_bg">


<div id="main" class="top_bar ">

<div class="row top_bar_content shadow-sm ">

  <div class="col-lg-1 toggleNav">
    <button class="openbtn" onclick="toggleNav()" onmouseover="changeIcon()" onmouseout="revertIcon()">
    <i class="bi bi-list" id="menuIcon"></i>
      </button>  
  </div>


  <div class="col-lg-11 topNav_msg">
    <div class="greeting_msg">Good <span>Morning, </span> <span>Roshan</span> !</div>

    <div id="currentDate" class="currentdate"></div>
  </div>
</div>

<hr>

</div>

</div>


{{-- scripts --}}

{{-- date --}}
<script>
  // Function to get the current date components
  function getCurrentDate() {
      const date = new Date(); // Get the current date

      const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']; // Array of day names
      const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; // Array of month names

      const dayName = days[date.getDay()]; // Get the current day name
      const day = date.getDate(); // Get the current day of the month
      const monthName = months[date.getMonth()]; // Get the current month name
      const year = date.getFullYear(); // Get the current year

      return `${dayName}, ${monthName} ${day}, ${year}`; // Return the formatted date
  }

  // Display the current date on the webpage
  document.getElementById('currentDate').textContent = getCurrentDate();
</script>


<!-- JavaScript -->
<script>
  function changeIcon() {
    const icon = document.getElementById('menuIcon');
    icon.className = 'bi bi-arrow-left-circle'; // Change to 'bi bi-x' or another icon

 
  }
  
  function revertIcon() {
    const icon = document.getElementById('menuIcon');
    icon.className = 'bi bi-list'; // Change back to 'bi bi-list'
  }
  </script>
  