// Define form element
const SMSConfigurationForm = document.getElementById('re_sms_configuration_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var SMSConfigurationValidator = FormValidation.formValidation(
    SMSConfigurationForm,
    {
        fields: {
            'account_sid': {
                validators: {
                    notEmpty: {
                        message: 'Account ID is required'
                    }
                }
            },

            'auth_token': {
                validators: {
                    notEmpty: {
                        message: 'Auth token is required'
                    }
                }
            },
            'twilio_phone_number': {
                validators: {
                    notEmpty: {
                        message: 'Twilio phone number is required'
                    }
                }
            },
            'sender_id': {
                validators: {
                    notEmpty: {
                        message: 'Sender ID is required'
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
const SMSConfigurationSubmitButton = document.getElementById('re_sms_configuration_submit');
SMSConfigurationSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (SMSConfigurationValidator) {
        SMSConfigurationValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                SMSConfigurationSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                SMSConfigurationSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    SMSConfigurationSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    SMSConfigurationSubmitButton.disabled = false;

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

                    SMSConfigurationForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
