<!DOCTYPE html>
<html lang="en">
<head>
    <title> Business Cards - WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")

<section id="ourfaq" class="bglight position-relative padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 pr-lg-0 whitebox">
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom35 text-center text-md-left"> Please Fill Out the Form Below</h3>
                    <form class="getin_form border-form" id="designer_form" method="POST"
                          action="{{route('submit_card_form')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <label for="name" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Business/Focal Person Name"
                                           id="name" name="name">
                                    <span id="name_error" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Tagline/Designation"
                                           id="tag_line" name="tagline">
                                    <span id="tagline_error" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <label for="email" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="Email:" id="email"
                                           name="email">
                                    <span id="email_error" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <label for="contact_number" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Contact Number:"
                                           id="contact_number" name="contact_number">
                                    <span id="contact_number_error" style="color:red;"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <label for="website" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Website" id="website"
                                           name="website">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <label for="image" class="d-none"></label>
                                    <input class="form-control" type="file" placeholder="Image:" id="image"
                                           name="image">
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="address" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Address:" id="address"
                                           name="address">
                                    <span id="address_error" style="color:red;"></span>
                                </div>
                            </div>

                            <input type="hidden" name="template_name" value="{{$templateName}}">


                            <div class="col-sm-12">
                                <button type="submit" class="button gradient-btn w-100">Preview</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Contact US ends -->
@include("partials.web_footer")
@include("partials.web_scripts")

<script>
    document.getElementById('designer_form').addEventListener('submit', function(event) {
        let isValid = true;

        // Fields
        const name = document.getElementById('name');
        const tagline = document.getElementById('tag_line');
        const email = document.getElementById('email');
        const address = document.getElementById('address');
        const contactNumber = document.getElementById('contact_number');

        // Error elements
        const nameError = document.getElementById('name_error');
        const taglineError = document.getElementById('tagline_error');
        const addressError = document.getElementById('address_error');
        const contactNumberError = document.getElementById('contact_number_error');
        const emailError = document.getElementById('email_error');

        // Clear previous error messages
        nameError.textContent = '';
        taglineError.textContent = '';
        addressError.textContent = '';
        contactNumberError.textContent = '';
        emailError.textContent = '';

        // Validation logic here...
        // CNIC validation
        if (!name.value.trim()) {
            nameError.textContent = 'Business name is required';
            isValid = false;
        }

        // Company Name validation
        if (!tagline.value.trim()) {
            taglineError.textContent = 'Tagline is required';
            isValid = false;
        }

        // Company Address validation
        if (!address.value.trim()) {
            addressError.textContent = ' Address is required';
            isValid = false;
        }


        // Contact Number validation
        if (!contactNumber.value.trim()) {
            contactNumberError.textContent = 'Contact Number is required';
            isValid = false;
        }

        // Email validation
        if (!email.value.trim()) {
            emailError.textContent = 'Email is required';
            isValid = false;
        }
        // Prevent form submission if invalid
        if (!isValid) {
            event.preventDefault();
        }
    });
    // These should be outside the submit event listener
    document.getElementById('name').addEventListener('input', function() {
        document.getElementById('name_error').textContent = '';
    });
    document.getElementById('tag_line').addEventListener('input', function() {
        document.getElementById('tagline_error').textContent = '';
    });
    document.getElementById('address').addEventListener('input', function() {
        document.getElementById('address_error').textContent = '';
    });
    document.getElementById('contact_number').addEventListener('input', function() {
        document.getElementById('contact_number_error').textContent = '';
    });
    document.getElementById('email').addEventListener('input', function() {
        document.getElementById('emailError').textContent = '';
    });

    // Additional email validation logic (if needed)

</script>

</body>
</html>
