// Define form element
const GoogleConfigurationForm = document.getElementById('re_google_configuration_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var GoogleConfigurationValidator = FormValidation.formValidation(
    GoogleConfigurationForm,
    {
        fields: {
            'google_api_key': {
                validators: {
                    notEmpty: {
                        message: 'APi key is required'
                    }
                }
            },

            'google_api_client_id': {
                validators: {
                    notEmpty: {
                        message: 'client id is required'
                    }
                }
            },
            'site_key': {
                validators: {
                    notEmpty: {
                        message: 'site key is required'
                    }
                }
            },
            'secret_key': {
                validators: {
                    notEmpty: {
                        message: 'secret key is required'
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
const GoogleConfigurationSubmitButton = document.getElementById('re_google_configuration_submit');
GoogleConfigurationSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (GoogleConfigurationValidator) {
        GoogleConfigurationValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                GoogleConfigurationSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                GoogleConfigurationSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    GoogleConfigurationSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    GoogleConfigurationSubmitButton.disabled = false;

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

                    GoogleConfigurationForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
