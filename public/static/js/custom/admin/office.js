try {
    // Define form element
    const addOfficeForm = document.getElementById('add_office_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addOfficeValidator = FormValidation.formValidation(
        addOfficeForm,
        {
            fields: {
                'city': {
                    validators: {
                        notEmpty: {
                            message: 'City is required'
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
// Submit button handler
    const officeSubmitButton = document.getElementById('add_office_form_submit');
    officeSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addOfficeValidator) {
            addOfficeValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    officeSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    officeSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        officeSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        officeSubmitButton.disabled = false;

                        // Show popup confirmation
                        Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                        addOfficeForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add Item ",err)
}


try {
    // Define form element
    const editIOfficeForm = document.getElementById('update_office_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editOfficeValidator = FormValidation.formValidation(
        editIOfficeForm,
        {
            fields: {
                'city': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
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
// Submit button handler
    const officeEditButton = document.getElementById('update_office_form_submit');
    officeEditButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editOfficeValidator) {
            editOfficeValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    officeEditButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    officeEditButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        officeEditButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        officeEditButton.disabled = false;

                        // Show popup confirmation
                        Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                        editIOfficeForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add Item ",err)
}


// Delete Success Story

function deleteOfficeItem(id) {
    Swal.fire({
        html: `Are you sure you want to delete this client?`,
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Yes!",
        cancelButtonText: 'Nope, cancel it',
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-primary'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace("/adb/office-delete/" + id);
        }
    });
}
