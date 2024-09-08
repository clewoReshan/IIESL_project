@extends('layout.authLay') @section('content') @section('title', 'IIESL - User')

<!-- sidebar -->
@include('layout.sidebar')

<!-- top bar -->
@include('layout.topbar')

<div class="content" id="content">
    <div class="dashboard_container" id="dashboard_container">

          

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch Form Modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Membership Application</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form id="multiStepForm">
                    <!-- Step 1: Personal Details -->
                    <div class="form-step" id="step-1">

                        <div class="row">

                            <div class="col-md-12">
                                <h6>
                                    SECTION 1: PERSONAL DATA ABOUT THE CANDIDATE
                                </h6>
                            </div>

                            <div class="col-12 mt-2 ">
                                <label for="formFile" class="form-label"
                                    >Photo</label
                                >
                                <input
                                    class="form-control"
                                    type="file"
                                    id="formFile"
                                />
                            </div>

                            <div class="col-12 mt-2">
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

                            <div class="col-12 mt-2">
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

                                <div class="input-group">
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

                            <div class="col-12 mt-2">
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

                            <div class="col-12 mt-2">
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

                            <div class="col-12 mt-2">
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

                            <div class="col-md-12 mt-2">
                                <label for="inputCity" class="form-label"
                                    >1.6 Civil Status</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputCivilStatus"
                                />
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="inputCity" class="form-label"
                                    >1.7 National Identity Card Number</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputCivilStatus"
                                />
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="inputCity" class="form-label"
                                    >1.8 Date of Birth</label
                                >
                                <input type="date" class="form-control" id="" />
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="inputCity" class="form-label"
                                    >1.9 Age</label
                                >
                                <input
                                    type="number"
                                    class="form-control"
                                    id=""
                                />
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="inputCity" class="form-label"
                                    >1.10 Class of Membership Applied for</label
                                >

                                <div class="row">

                               

                                <div class="col-md-12 mt-2">
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


                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary next-step mt-5 ">Next</button>
                        </div>
                    </div>

                    <!-- Step 2: Education -->
                    <div class="form-step" id="step-2" style="display:none;">


                        <div class="col-md-12">
                            <h6>
                                SECTION 2: DETAILS OF EDUCATION
                            </h6>
                        </div>

                        <div class="row">

                            <div id="">
                                <div id="education-fields">
                                    <!-- Education fields will be added here -->
                                </div>
                                <button type="button" class="btn btn-primary mb-3" id="add-education">Add Education</button>
                            </div>


                        </div>




                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                        <button type="button" class="btn btn-primary next-step">Next</button>

                    </div>

                    <!-- Step 3: Training & Experience -->
                    <div class="form-step" id="step-3" style="display:none;">
                        <div class="form-group">
                            <label for="training">Training</label>
                            <input type="text" class="form-control" id="training" placeholder="Enter training">
                        </div>
                        <div class="form-group">
                            <label for="experience">Experience</label>
                            <input type="text" class="form-control" id="experience" placeholder="Enter experience">
                        </div>
                        <button type="button" class="btn btn-secondary prev-step">Previous</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    var currentStep = 1;

    // Function to show the correct step
    function showStep(step) {
        $('.form-step').hide();
        $('#step-' + step).show();
    }

    // Move to the next step
    $('.next-step').click(function() {
        if (currentStep < 3) { // Adjust based on the number of steps
            currentStep++;
            showStep(currentStep);
        }
    });

    // Move to the previous step
    $('.prev-step').click(function() {
        if (currentStep > 1) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Initially show the first step
    showStep(currentStep);

    // Handle form submission
    $('#multiStepForm').submit(function(event) {
        event.preventDefault();
        // Your form submission logic here
        alert('Form submitted!');
        $('#exampleModal').modal('hide');
    });
});
</script>


{{-- Multiple education  --}}



<script>
    document.getElementById('add-education').addEventListener('click', function() {
        // Create a new education field set
        const container = document.createElement('div');
        container.classList.add('education-container');

        // Add fields for the education details
        container.innerHTML = `


            

            <div class="col-md-12 mt-2">
                <label for="inputCity" class="form-label">2.1 General Education </label>
                    <input type="text" class="form-control" name="year[]"/>
            </div>

            <button type="button" class="remove-education">Remove</button>

            
            
        `;

        

        // Add the new fields to the container
        document.getElementById('education-fields').appendChild(container);

        // Add event listener to the remove button
        container.querySelector('.remove-education').addEventListener('click', function() {
            container.remove();
        });
    });
</script> 





    
    
        </div>
</div>



