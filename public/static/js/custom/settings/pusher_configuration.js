// Define form element
const PusherConfigurationForm = document.getElementById('re_pusher_configuration_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var PusherConfigurationValidator = FormValidation.formValidation(
    PusherConfigurationForm,
    {
        fields: {
            'app_id': {
                validators: {
                    notEmpty: {
                        message: 'APP ID is required'
                    }
                }
            },

            'app_key': {
                validators: {
                    notEmpty: {
                        message: 'APP Key is required'
                    }
                }
            },
            'app_secret': {
                validators: {
                    notEmpty: {
                        message: 'APP Key is required'
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
const PusherConfigurationSubmitButton = document.getElementById('re_pusher_configuration_submit');
PusherConfigurationSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (PusherConfigurationValidator) {
        PusherConfigurationValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                PusherConfigurationSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                PusherConfigurationSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    PusherConfigurationSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    PusherConfigurationSubmitButton.disabled = false;

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

                    PusherConfigurationForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
