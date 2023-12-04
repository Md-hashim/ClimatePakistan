// Define form element
const generalSettingsForm = document.getElementById('re_general_settings_form');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var generalSettingsValidator = FormValidation.formValidation(
    generalSettingsForm,
    {
        fields: {
            'company_name': {
                validators: {
                    notEmpty: {
                        message: 'Company name is required'
                    }
                }
            },

            // 'logo_lg': {
            //     validators: {
            //         notEmpty: {
            //             message: 'Please select a logo'
            //         },
            //         file: {
            //             extension: 'jpg,jpeg,png',
            //             type: 'image/jpeg,image/png',
            //             message: 'The selected file is not valid'
            //         },
            //     }
            // },
            //
            // 'logo_sm': {
            //     validators: {
            //         notEmpty: {
            //             message: 'Please select a logo'
            //         },
            //         file: {
            //             extension: 'jpg,jpeg,png',
            //             type: 'image/jpeg,image/png',
            //             message: 'The selected file is not valid'
            //         },
            //     }
            // },
            // 'favicon': {
            //     validators: {
            //         notEmpty: {
            //             message: 'Please select a favicon'
            //         },
            //         file: {
            //             extension: 'jpg,jpeg,png',
            //             type: 'image/jpeg,image/png',
            //             message: 'The selected file is not valid'
            //         },
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
const generalSubmitButton = document.getElementById('re_general_settings_submit');
generalSubmitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (generalSettingsValidator) {
        generalSettingsValidator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                generalSubmitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                generalSubmitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    generalSubmitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    generalSubmitButton.disabled = false;

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

                    generalSettingsForm.submit(); // Submit form
                }, 1500);
            }
        });
    }
});
