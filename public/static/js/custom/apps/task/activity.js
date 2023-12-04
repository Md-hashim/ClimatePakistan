// Define form element
const addActivityForm = document.getElementById('re_add_task_log_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var addActivityValidator = FormValidation.formValidation(
    addActivityForm,
    {
        fields: {
            'task_note': {
                validators: {
                    notEmpty: {
                        message: 'Task note is required'
                    }
                }
            },
            'task_date': {
                validators: {
                    notEmpty: {
                        message: 'Task date is required '
                    }
                }
            },

            'task_action': {
                validators: {
                    notEmpty: {
                        message: 'Task action is required '
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
const ActivitySubmitButton = document.getElementById('re_add_task_log_submit');
ActivitySubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (addActivityValidator) {
        addActivityValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                ActivitySubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                ActivitySubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    ActivitySubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    ActivitySubmitButton.disabled = false;

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

                    addActivityForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
