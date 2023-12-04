// Define form element
const bjLeadsSettingsForm = document.getElementById('re_bj_leads_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var bjLeadsSettingsValidator = FormValidation.formValidation(
    bjLeadsSettingsForm,
    {
        fields: {
            'notification_title': {
                validators: {
                    notEmpty: {
                        message: 'notification title is required'
                    }
                }
            },

            'notification_type': {
                validators: {
                    notEmpty: {
                        message: 'notification type is required'
                    }
                }
            },
            'condition': {
                validators: {
                    notEmpty: {
                        message: 'condition is required'
                    }
                }
            },

            'notify_to[]': {
                validators: {
                    notEmpty: {
                        message: 'notify to is required'
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
const bjLeadsSubmitButton = document.getElementById('re_bj_leads_submit');
bjLeadsSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (bjLeadsSettingsValidator) {
        bjLeadsSettingsValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                bjLeadsSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                bjLeadsSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    bjLeadsSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    bjLeadsSubmitButton.disabled = false;

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

                    bjLeadsSettingsForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
