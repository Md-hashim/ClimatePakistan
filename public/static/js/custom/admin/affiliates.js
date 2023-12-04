
try{
    const addAffiliatesForm = document.getElementById('add_affiliates_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addCoursesValidator = FormValidation.formValidation(
        addAffiliatesForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },

                'icon': {
                    validators: {
                        notEmpty: {
                            message: 'Icon is required'
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
    const AffiliatesSubmitButton = document.getElementById('add_affiliates_submit');
    AffiliatesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addCoursesValidator) {
            addCoursesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    AffiliatesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    AffiliatesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        AffiliatesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        AffiliatesSubmitButton.disabled = false;

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

                        addAffiliatesForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
}catch (err){
    console.log("Edit",err)
}
try{
    const editAffiliatesForm = document.getElementById('edit_affiliates_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editCoursesValidator = FormValidation.formValidation(
        editAffiliatesForm,
        {
            fields: {
                'edit_title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
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
    const AffiliatesSubmitButton = document.getElementById('edit_affiliates_submit');
    AffiliatesSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editCoursesValidator) {
            editCoursesValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    AffiliatesSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    AffiliatesSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        AffiliatesSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        AffiliatesSubmitButton.disabled = false;

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

                        editAffiliatesForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
}catch (err){
    console.log("Add",err)
}

function deleteAffiliate(id) {
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
            window.location.replace("/adb/delete-affiliate/" + id);
        }
    });
}

