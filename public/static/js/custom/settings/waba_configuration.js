// Define form element
const WABAConfigurationForm = document.getElementById('re_waba_configuration_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var WABAConfigurationValidator = FormValidation.formValidation(
    WABAConfigurationForm,
    {
        fields: {
            'api_key': {
                validators: {
                    notEmpty: {
                        message: 'API Key is required'
                    }
                }
            },

            'temporary_access_token': {
                validators: {
                    notEmpty: {
                        message: 'Temporary access token is required'
                    }
                }
            },
            'from_phone_number': {
                validators: {
                    notEmpty: {
                        message: 'From phone number is required'
                    }
                }
            },
            'phone_number_id': {
                validators: {
                    notEmpty: {
                        message: 'Phone number ID is required'
                    }
                }
            },
            'waba_id': {
                validators: {
                    notEmpty: {
                        message: 'WABA ID is required'
                    }
                }
            },
            'business_id': {
                validators: {
                    notEmpty: {
                        message: 'Business ID is required'
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

// Submit button handler
const WABAConfigurationSubmitButton = document.getElementById('re_waba_configuration_submit');
WABAConfigurationSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (WABAConfigurationValidator) {
        WABAConfigurationValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                WABAConfigurationSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                WABAConfigurationSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    WABAConfigurationSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    WABAConfigurationSubmitButton.disabled = false;

                    // Show popup confirmation
                    // Swal.fire({
                    //     text: "Form has been successfully submitted!",
                    //     icon: "success",
                    //     buttonsStyling: false,
                    //     confirmButtonText: "Ok, got it!",
                    //     customClass: {
                    //         confirmButton: "btn btn-primary"
                    //     }
                    // });

                    WABAConfigurationForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
