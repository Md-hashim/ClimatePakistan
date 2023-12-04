// Define form element
const SMSTemplatesForm = document.getElementById('re_sms_templates_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var SMSTemplatesValidator = FormValidation.formValidation(
    SMSTemplatesForm,
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
            'body': {
                validators: {
                    notEmpty: {
                        message: 'body is required'
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
const SMSTemplatesSubmitButton = document.getElementById('re_sms_templates_submit');
SMSTemplatesSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (SMSTemplatesValidator) {
        SMSTemplatesValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                SMSTemplatesSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                SMSTemplatesSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    SMSTemplatesSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    SMSTemplatesSubmitButton.disabled = false;

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

                    SMSTemplatesForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
