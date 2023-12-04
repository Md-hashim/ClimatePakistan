// Define form element
const LeadsSettingsForm = document.getElementById('re_leads_settings_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var LeadsSettingsValidator = FormValidation.formValidation(
    LeadsSettingsForm,
    {
        fields: {
            'default_status': {
                validators: {
                    notEmpty: {
                        message: 'default status is required'
                    }
                }
            },

            'default_source': {
                validators: {
                    notEmpty: {
                        message: 'notification type is required'
                    }
                }
            },
            'auto_assign': {
                validators: {
                    notEmpty: {
                        message: 'condition is required'
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
const LeadsSubmitButton = document.getElementById('re_leads_settings_submit');
LeadsSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (LeadsSettingsValidator) {
        LeadsSettingsValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                LeadsSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                LeadsSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    LeadsSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    LeadsSubmitButton.disabled = false;

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

                    LeadsSettingsForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
