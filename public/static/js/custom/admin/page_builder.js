// try {
    // Define form element

    const addPageBuilderForm = document.getElementById('page_builder_form');
    var addPageBuilderValidator = FormValidation.formValidation(
        addPageBuilderForm,
        {
            fields: {
                'page_title': {
                    validators: {
                        notEmpty: {
                            message: 'Page title is required'
                        }
                    }
                },

                'meta_tag': {
                    validators: {
                        notEmpty: {
                            message: 'Gallery image is required'
                        }
                    }
                },
                'meta_description': {
                    validators: {
                        notEmpty: {
                            message: 'Gallery image is required'
                        }
                    }
                },
                'html': {
                    validators: {
                        notEmpty: {
                            message: 'Html code is required'
                        }
                    }
                },
                //
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
console.log("hi");
// Submit button handler
    const PageBuilderSubmitButton = document.getElementById('add_page_builder_submit');
    PageBuilderSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addPageBuilderValidator) {
            addPageBuilderValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    PageBuilderSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    PageBuilderSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        PageBuilderSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        PageBuilderSubmitButton.disabled = false;

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

                        addPageBuilderForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
// } catch (err) {
//     console.log("Add ",err)
// }

