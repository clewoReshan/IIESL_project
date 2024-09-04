@extends('layout.authLay') @section('content') @section('title', 'IIESL - User')

<!-- sidebar -->
@include('layout.sidebar')

<!-- top bar -->
@include('layout.topbar')

<div class="content" id="content">
    <div class="dashboard_container" id="dashboard_container">
        {{-- add dashboard content here! --}}

        <!-- Button to trigger the modal -->
        <div class="add_user_btn">
            <button
                type="button"
                class="primary_btn"
                data-bs-toggle="modal"
                data-bs-target="#myModal"
                id="addButton"
            >
                Add User
            </button>
        </div>

        <!-- Modal Structure -->
        <!-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">APPLICATION FOR MEMBERSHIP</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">


        <form class="row">

          <div class="col-md-12">
            <h6> SECTION 1: PERSONAL DATA ABOUT THE CANDIDATE</h6>
           
          </div>


          <div class="mb-3">
            <label for="formFile" class="form-label">Photo</label>
            <input class="form-control" type="file" id="formFile">
          </div>



            <div class="col-12">
              <label for="inputText" class="form-label">1.1 Full Name</label>

              <div class="row">
                <div class="col-md-3">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Mr.</option>
                    <option value="1">Mr.</option>
                    <option value="2">Ms.</option>
                    <option value="3">Miss.</option>
                    <option value="3">Mrs.</option>
                  </select>
                </div>

                <div class="col-md-9">
                  <input type="text" class="form-control" id="inputText" placeholder="Full Name">
                </div>
              </div>



            </div>


          <div class="col-12">
            <label for="inputAddress" class="form-label">1.2 Permanent Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">


            <div class="input-group mb-3 mt-3">
              <span class="input-group-text" id="basic-addon1">Tel:</span>
              <input type="number" class="form-control" placeholder="TelePhone Number" aria-label="" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Mobile:</span>
              <input type="number" class="form-control" placeholder="Mobile Number" aria-label="" aria-describedby="basic-addon1">
            </div>

          </div>

          <div class="col-12">
            <label for="inputAddress" class="form-label">1.3 Official Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">


            <div class="input-group mb-3 mt-3">
              <span class="input-group-text" id="basic-addon1">Tel:</span>
              <input type="number" class="form-control" placeholder="TelePhone Number" aria-label="" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Mobile:</span>
              <input type="number" class="form-control" placeholder="Mobile Number" aria-label="" aria-describedby="basic-addon1">
            </div>

          </div>

          <div class="col-12">

            <label for="inputAddress" class="form-label">1.4 Preferred Postal Address  </label>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Official Address
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Permanent Address
              </label>
            </div>
          </div>


          <div class="col-12">

            <label for="inputAddress" class="form-label">1.5 Sex  </label>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" >
              <label class="form-check-label" for="flexRadioDefault2">
                Female
              </label>
            </div>
          </div>


          <div class="col-md-12">
            <label for="inputCity" class="form-label">1.6 Civil Status</label>
            <input type="text" class="form-control" id="inputCivilStatus">
          </div>

          <div class="col-md-12">
            <label for="inputCity" class="form-label">1.7 National Identity Card Number</label>
            <input type="text" class="form-control" id="inputCivilStatus">
          </div>

          <div class="col-md-12">
            <label for="inputCity" class="form-label">1.8 Date of Birth</label>
            <input type="date" class="form-control" id="">
          </div>
          
          <div class="col-md-12">
            <label for="inputCity" class="form-label">1.9 Age</label>
            <input type="number" class="form-control" id="">
          </div>

          <div class="col-md-12">

          <label for="inputCity" class="form-label">1.10 Class of Membership Applied for</label>
           
          <div class="col">
                  <select class="form-select" aria-label="Default select example">
                    <option selected>Companion</option>
                    <option value="">Companion</option>
                    <option value="">Student</option>
                    <option value="">Associate</option>
                    <option value="">Associate Member</option>
                    <option value="">Member</option>
                  </select>
                </div>
          </div>


      
      
    </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="nextButton" class="btn btn-primary">Next</button>
      </div>
    </div>



  </div>
</div> -->

        {{-- add body content here ! --}}

        <!-- First Modal - Personal Data -->
        <div id="modal1" class="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-md-12">
                                <h6>
                                    SECTION 1: PERSONAL DATA ABOUT THE CANDIDATE
                                </h6>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label"
                                    >Photo</label
                                >
                                <input
                                    class="form-control"
                                    type="file"
                                    id="formFile"
                                />
                            </div>

                            <div class="col-12">
                                <label for="inputText" class="form-label"
                                    >1.1 Full Name</label
                                >

                                <div class="row">
                                    <div class="col-md-3">
                                        <select
                                            class="form-select"
                                            aria-label="Default select example"
                                        >
                                            <option selected>Mr.</option>
                                            <option value="1">Mr.</option>
                                            <option value="2">Ms.</option>
                                            <option value="3">Miss.</option>
                                            <option value="3">Mrs.</option>
                                        </select>
                                    </div>

                                    <div class="col-md-9">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="inputText"
                                            placeholder="Full Name"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label"
                                    >1.2 Permanent Address</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputAddress"
                                    placeholder="1234 Main St"
                                />

                                <div class="input-group mb-3 mt-3">
                                    <span
                                        class="input-group-text"
                                        id="basic-addon1"
                                        >Tel:</span
                                    >
                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="TelePhone Number"
                                        aria-label=""
                                        aria-describedby="basic-addon1"
                                    />
                                </div>

                                <div class="input-group mb-3">
                                    <span
                                        class="input-group-text"
                                        id="basic-addon1"
                                        >Mobile:</span
                                    >
                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="Mobile Number"
                                        aria-label=""
                                        aria-describedby="basic-addon1"
                                    />
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label"
                                    >1.3 Official Address</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputAddress"
                                    placeholder="1234 Main St"
                                />

                                <div class="input-group mb-3 mt-3">
                                    <span
                                        class="input-group-text"
                                        id="basic-addon1"
                                        >Tel:</span
                                    >
                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="TelePhone Number"
                                        aria-label=""
                                        aria-describedby="basic-addon1"
                                    />
                                </div>

                                <div class="input-group mb-3">
                                    <span
                                        class="input-group-text"
                                        id="basic-addon1"
                                        >Mobile:</span
                                    >
                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="Mobile Number"
                                        aria-label=""
                                        aria-describedby="basic-addon1"
                                    />
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label"
                                    >1.4 Preferred Postal Address
                                </label>

                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault1"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="flexRadioDefault1"
                                    >
                                        Official Address
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault2"
                                        checked
                                    />
                                    <label
                                        class="form-check-label"
                                        for="flexRadioDefault2"
                                    >
                                        Permanent Address
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="inputAddress" class="form-label"
                                    >1.5 Sex
                                </label>

                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="sex"
                                        id="flexRadioDefault1"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="flexRadioDefault1"
                                    >
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="sex"
                                        id="flexRadioDefault2"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="flexRadioDefault2"
                                    >
                                        Female
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="inputCity" class="form-label"
                                    >1.6 Civil Status</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputCivilStatus"
                                />
                            </div>

                            <div class="col-md-12">
                                <label for="inputCity" class="form-label"
                                    >1.7 National Identity Card Number</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputCivilStatus"
                                />
                            </div>

                            <div class="col-md-12">
                                <label for="inputCity" class="form-label"
                                    >1.8 Date of Birth</label
                                >
                                <input type="date" class="form-control" id="" />
                            </div>

                            <div class="col-md-12">
                                <label for="inputCity" class="form-label"
                                    >1.9 Age</label
                                >
                                <input
                                    type="number"
                                    class="form-control"
                                    id=""
                                />
                            </div>

                            <div class="col-md-12">
                                <label for="inputCity" class="form-label"
                                    >1.10 Class of Membership Applied for</label
                                >

                                <div class="col">
                                    <select
                                        class="form-select"
                                        aria-label="Default select example"
                                    >
                                        <option selected>Companion</option>
                                        <option value="">Companion</option>
                                        <option value="">Student</option>
                                        <option value="">Associate</option>
                                        <option value="">
                                            Associate Member
                                        </option>
                                        <option value="">Member</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>

                    <span class="close" onclick="closeModal('modal1')"
                        >&times;</span
                    >

                    <div class="col-md-12 next_btn">
                        <button class="NextBtn" onclick="nextModal()">
                            Next <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Modal Education -->
        <div id="modal2" class="modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <span class="close" onclick="closeModal('modal2')"
                        >&times;</span
                    >

                    <div class="modal-body">
                        <form action="" class="row">
                            <div class="col-md-12">
                                <h6>SECTION 2: DETAILS OF EDUCATION</h6>
                            </div>

                            <div class="col-md-12">
                              <label for="" class="form-label"
                                    >2.1 General Education</label
                                >


                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal script -->

        <script>
            // Function to open a modal
            function openModal(modalId) {
                document.getElementById(modalId).style.display = "block";
            }

            // Function to close a modal
            function closeModal(modalId) {
                document.getElementById(modalId).style.display = "none";
            }

            // Function to handle the transition from the first modal to the second
            function nextModal() {
                closeModal("modal1");
                openModal("modal2");
            }

            // Add event listener to the "Add" button to open the first modal
            document
                .getElementById("addButton")
                .addEventListener("click", function () {
                    openModal("modal1");
                });
        </script>
    </div>
</div>

@endsection
