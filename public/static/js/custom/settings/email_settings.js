// Define form element
const emailSettingsForm = document.getElementById('re_email_settings_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var emailSettingsValidator = FormValidation.formValidation(
    emailSettingsForm,
    {
        fields: {
            'encryption_type': {
                validators: {
                    notEmpty: {
                        message: 'encryption type is required'
                    }
                }
            },

            'smtp_host': {
                validators: {
                    notEmpty: {
                        message: 'SMTP host is required'
                    }
                }
            },
            'smtp_port': {
                validators: {
                    notEmpty: {
                        message: 'SMTP port is required'
                    }
                }
            },
            'from_email_address': {
                validators: {
                    notEmpty: {
                        message: 'From email address is required'
                    }
                }
            },
            'smtp_username': {
                validators: {
                    notEmpty: {
                        message: 'SMTP username is required'
                    }
                }
            },
            'smtp_password': {
                validators: {
                    notEmpty: {
                        message: 'SMTP password is required'
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
const emailSubmitButton = document.getElementById('re_email_settings_submit');
emailSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (emailSettingsValidator) {
        emailSettingsValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                emailSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                emailSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    emailSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    emailSubmitButton.disabled = false;

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

                    emailSettingsForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
