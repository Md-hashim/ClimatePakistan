// Define form element
const companySettingsForm = document.getElementById('re_company_settings_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var companySettingsValidator = FormValidation.formValidation(
    companySettingsForm,
    {
        fields: {
            'company_name': {
                validators: {
                    notEmpty: {
                        message: 'Company name is required'
                    }
                }
            },

            'email_address': {
                validators: {
                    notEmpty: {
                        message: 'Email address is required'
                    }
                }
            },
            'phone_number': {
                validators: {
                    notEmpty: {
                        message: 'Phone number is required'
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
const companySubmitButton = document.getElementById('re_company_settings_submit');
companySubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (companySettingsValidator) {
        companySettingsValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                companySubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                companySubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    companySubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    companySubmitButton.disabled = false;

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

                    companySettingsForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
