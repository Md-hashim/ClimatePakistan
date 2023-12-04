// Define form element
const emailTemplateForm = document.getElementById('re_email_templates_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var emailTemplateValidator = FormValidation.formValidation(
    emailTemplateForm,
    {
        fields: {
            'template_title': {
                validators: {
                    notEmpty: {
                        message: 'Template title is required'
                    }
                }
            },

            'subject': {
                validators: {
                    notEmpty: {
                        message: 'Subject is required'
                    }
                }
            },
            'from_name': {
                validators: {
                    notEmpty: {
                        message: 'From name is required'
                    }
                }
            },
            // 'email_message': {
            //     validators: {
            //         notEmpty: {
            //             message: 'email message is required'
            //         }
            //     }
            // },

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
const emailTemplateSubmitButton = document.getElementById('re_email_templates_submit');
emailTemplateSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (emailTemplateValidator) {
        emailTemplateValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                emailTemplateSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                emailTemplateSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    emailTemplateSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    emailTemplateSubmitButton.disabled = false;

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

                    emailTemplateForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
