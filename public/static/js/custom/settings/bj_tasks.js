// Define form element
const bjTasksSettingsForm = document.getElementById('re_bj_tasks_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var bjTasksSettingsValidator = FormValidation.formValidation(
    bjTasksSettingsForm,
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
const bjTasksSubmitButton = document.getElementById('re_bj_tasks_submit');
bjTasksSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (bjTasksSettingsValidator) {
        bjTasksSettingsValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                bjTasksSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                bjTasksSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    bjTasksSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    bjTasksSubmitButton.disabled = false;

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

                    bjTasksSettingsForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
