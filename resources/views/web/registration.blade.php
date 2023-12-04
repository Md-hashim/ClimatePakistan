<!DOCTYPE html>
<html lang="en">
<head>
    <title>Entrepreneurship Registration - WETDAP</title>
    @include("partials.web_styles")
</head>
<body>
@include("partials.web_header")

<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth subpage-banner" style="background:url('{{ asset("static/web/images/climate.jpg")}}')">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-light">
                        Join Climate Pakistan!
                    </h2>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="pt-5  pb-5">
    <div class="container pt-4 pb-5">
        <div class="row heading_space">


            <div class="col-md-12">


                <div class=" bg-light heading_space border-11 p-md-5 p-4">
                    <h4 class="text-capitalize darkcolor bottom20 pt-md-0 pt-3">  Enter Your Details</h4>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif(session("error"))
                        <div class="alert alert-error">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form class="reg-form-div" method="post" action="{{ route("entrepreneurship_registration") }}" id="registration_form">
                        @csrf
                        <div class="row">

                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label class="required">NTN/CNIC:<span style="color:red;">*</span></label>
                                    <input class="form-control fm2" type="text" name="cnic" id="cnic">
                                    <span id="cnicError" style="color:red;"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Company Name:<span style="color:red;">*</span></label>
                                    <input class="form-control fm2" type="text" name="business_name" id="company_name">
                                    <span id="company_name_error" style="color:red;"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Company Address:<span style="color:red;">*</span></label>
                                    <input class="form-control fm2" type="text" name="address" id="company_address">
                                    <span id="company_address_error" style="color:red;"></span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Focal Person:<span style="color:red;">*</span></label>
                                    <input class="form-control fm2" type="text" name="full_name" id="focal_person">
                                    <span id="focal_person_error" style="color:red;"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Contact Number:<span style="color:red;">*</span></label>
                                    <input class="form-control fm2" type="text" name="phone_number" id="contact_number">
                                    <span id="contact_number_error" style="color:red;"></span>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Email Address:<span style="color:red;">*</span></label>
                                    <input class="form-control fm2" type="email" name="email" id="email">
                                    <span id="emailError" style="color:red;"></span>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Social media:<span style="color:red;">*</span></label>
                                    <select class="form-select fm2" name="social_media">

                                        <option>Facebook</option>
                                        <option>Instagram</option>
                                        <option>Twitter</option>
                                        <option>Youtube</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Region:<span style="color:red;">*</span></label>
                                    <select class="form-select fm2" name="region">

                                        <option>Punjab</option>
                                        <option>KP</option>
                                        <option>GB</option>
                                        <option>AJK</option>
                                        <option>Sindh, </option>
                                        <option>Baluchistan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Are you an exporter?<span style="color:red;">*</span> </label>
                                    <select class="form-select fm2" name="exporter">

                                        <option>Direct exporter </option>
                                        <option>Indirect exporter</option>
                                        <option>Not an exporter</option>

                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label>Export destination?<small>(for direct & indirect exporters only)</small> </label>
                                    <input class="form-control fm2" type="text" name="export_destination">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 mt-3">
                                <h5 class="darkcolor pb-4 pt-3">Product sector:<span style="color:red;">*</span> </h5>
                                <span id="product_sector_error" style="color:red;"></span>
                                <div class="form-group d-md-flex">


                                    <div class="col-md-4">
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Readymade Garments" />
                                            Readymade Garments
                                        </label>

                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value=" Home Textile" />
                                            Home Textile
                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Leather & Footwear" />
                                            Leather & Footwear
                                        </label>

                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Agro & Food" />
                                            Agro & Food
                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Furniture" />
                                            Furniture
                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Sports Goods" />
                                            Sports Goods
                                        </label>
                                    </div>



                                    <div class="col-md-4">
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Carpet & Rugs" />
                                            Carpet & Rugs


                                        </label>

                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Pharmaceuticals" />
                                            Pharmaceuticals

                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Beauty and Health Products" />
                                            Beauty and Health Products

                                        </label>

                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Gems & Jewelry" />
                                            Gems & Jewelry

                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Handicrafts" />
                                            Handicrafts

                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Halal/Organic Products" />
                                            Halal/Organic Products
                                        </label>

                                    </div>

                                    <div class="col-md-4">
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Cutlery" />
                                            Cutlery



                                        </label>

                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value=" Information Technology (IT)" />
                                            Information Technology (IT)


                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value=" Engineering Products" />
                                            Engineering Products


                                        </label>

                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Services" />
                                            Services


                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="product_categories[]" value="Others (please specify)" />
                                            Others (please specify)

                                        </label>


                                    </div>

                                </div>
                            </div> -->
<!-- 
                            <div class="col-md-12 col-sm-12 mt-3">
                                <h5 class="darkcolor pb-4 pt-3">Business Type:<span style="color:red;">*</span> </h5>
                                <span id="business_type_error" style="color:red;"></span>
                                <div class="form-group d-md-flex">
                                    <div class="col-md-4">
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="business_type[]" value="Exporter" />
                                            Exporter
                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="business_type[]" value="Importer" />
                                            Importer
                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="business_type[]" value="Whole Seller" />
                                            Whole Seller
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="business_type[]" value="Online Store" />
                                            Online Store
                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="business_type[]" value="Physical Outlets" />
                                            Physical Outlets
                                        </label>
                                        <label class="fm-label">
                                            <input type="checkbox" class="fm-check" name="business_type[]" value="Other" />
                                            Other
                                        </label>
                                    </div>
                                </div>
                            </div>



 -->

                            <!--<div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="message1" class="d-none"></label>
                                    <textarea class="form-control min-height-form" rows="6" id="message1" placeholder="Message:" required="" name="message"></textarea>
                                </div>
                            </div>-->
                            <div class="col-md-12 col-sm-12 mt-3">
                                <button type="submit" id="submit_btn1" class="button gradient-btn">SUBMIT</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>






</section>


@include("partials.web_footer")
@include("partials.web_scripts")
<script>
    document.getElementById('registration_form').addEventListener('submit', function(event) {
        let isValid = true;

        //checkboxes validation
        const businessTypeCheckboxes = document.querySelectorAll('input[name="business_type[]"]');
        const businessTypeError = document.getElementById('business_type_error');
        let isBusinessTypeChecked = false;
        const productSectorCheckboxes = document.querySelectorAll('input[name="product_categories[]"]');
        const productSectorError = document.getElementById('product_sector_error');
        let isProductSectorChecked = false;

        // Fields
        const cnic = document.getElementById('cnic');
        const companyName = document.getElementById('company_name');
        const companyAddress = document.getElementById('company_address');
        const focalPerson = document.getElementById('focal_person');
        const contactNumber = document.getElementById('contact_number');
        const email = document.getElementById('email');

        // Error elements
        const cnicError = document.getElementById('cnicError');
        const companyNameError = document.getElementById('company_name_error');
        const companyAddressError = document.getElementById('company_address_error');
        const focalPersonError = document.getElementById('focal_person_error');
        const contactNumberError = document.getElementById('contact_number_error');
        const emailError = document.getElementById('emailError');

        // Clear previous error messages
        cnicError.textContent = '';
        companyNameError.textContent = '';
        companyAddressError.textContent = '';
        focalPersonError.textContent = '';
        contactNumberError.textContent = '';
        emailError.textContent = '';
        businessTypeError.textContent = '';
        productSectorError.textContent = '';

        // CNIC validation
        if (!cnic.value.trim()) {
            cnicError.textContent = 'NTN/CNIC is required';
            isValid = false;
        }

        // Company Name validation
        if (!companyName.value.trim()) {
            companyNameError.textContent = 'Company Name is required';
            isValid = false;
        }

        // Company Address validation
        if (!companyAddress.value.trim()) {
            companyAddressError.textContent = 'Company Address is required';
            isValid = false;
        }

        // Focal Person validation
        if (!focalPerson.value.trim()) {
            focalPersonError.textContent = 'Focal Person is required';
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
        businessTypeCheckboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                isBusinessTypeChecked = true;
            }
        });
        //
        if (!isBusinessTypeChecked) {
            businessTypeError.textContent = 'Please select at least one business type';
            isValid = false;
        }
        productSectorCheckboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                isProductSectorChecked = true;
            }
        });
        //
        if (!isProductSectorChecked) {
            productSectorError.textContent = 'Please select at least one product sector';
            isValid = false;
        }
        if (!isValid) {
            event.preventDefault();
        }
    });

    // Event listeners to clear errors
    document.getElementById('cnic').addEventListener('input', function() {
        document.getElementById('cnicError').textContent = '';
    });
    document.getElementById('company_name').addEventListener('input', function() {
        document.getElementById('company_name_error').textContent = '';
    });
    document.getElementById('company_address').addEventListener('input', function() {
        document.getElementById('company_address_error').textContent = '';
    });
    document.getElementById('focal_person').addEventListener('input', function() {
        document.getElementById('focal_person_error').textContent = '';
    });
    document.getElementById('contact_number').addEventListener('input', function() {
        document.getElementById('contact_number_error').textContent = '';
    });
    document.getElementById('email').addEventListener('input', function() {
        document.getElementById('emailError').textContent = '';
    });
    document.querySelectorAll('input[name="business_type[]"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            document.getElementById('business_type_error').textContent = '';
        });
    });
    document.querySelectorAll('input[name="product_categories[]"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            document.getElementById('product_sector_error').textContent = '';
        });
    });
</script>

</body>
</html>
