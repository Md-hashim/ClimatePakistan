try {
    // Define form element
    const addGalleryForm = document.getElementById('add_gallery_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addGalleryValidator = FormValidation.formValidation(
        addGalleryForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },

                // 'image': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Gallery image is required'
                //         }
                //     }
                // },
                'cat_id': {
                    validators: {
                        notEmpty: {
                            message: 'Category is required'
                        }
                    }
                },
                'gallery_type': {
                    validators: {
                        notEmpty: {
                            message: 'Type is required'
                        }
                    }
                },
                'video': {
                    validators: {

                        file: {
                            extension: 'mp4,avi,mkv',
                            type: 'video/mp4,video/avi,video/x-matroska',
                            maxSize: 10 * 1024 * 1024, // 10 MB
                            message: 'The selected file is not valid or exceeds the 10MB limit'
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
    const GallerySubmitButton = document.getElementById('add_gallery_submit');
    GallerySubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addGalleryValidator) {
            addGalleryValidator.validate().then(function (status) {
                console.log('validated!');
                console.log("Submitting form now...");


                if (status == 'Valid') {
                    // Show loading indication
                    GallerySubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    GallerySubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        GallerySubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        GallerySubmitButton.disabled = false;

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

                        addGalleryForm.submit(); // Submit form
                    }, 3000);
                }
            });
        }
    });
} catch (err) {
    console.log("Add ",err)
}




// Delete Success Story

function deleteGallery(id) {
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
            window.location.replace("/adb/delete-gallery/" + id);
        }
    });
}

try {
    // Define form element
    const editGalleryForm = document.getElementById('edit_gallery_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editGalleryValidator = FormValidation.formValidation(
        editGalleryForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },


                'cat_id': {
                    validators: {
                        notEmpty: {
                            message: 'Category is required'
                        }
                    }
                },
                'video': {
                    validators: {

                        file: {
                            extension: 'mp4,avi,mkv',
                            type: 'video/mp4,video/avi,video/x-matroska',
                            maxSize: 10 * 1024 * 1024, // 10 MB
                            message: 'The selected file is not valid or exceeds the 10MB limit'
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
    const EditGallerySubmitButton = document.getElementById('edit_gallery_submit');
    EditGallerySubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editGalleryValidator) {
            editGalleryValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    EditGallerySubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    EditGallerySubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        EditGallerySubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        EditGallerySubmitButton.disabled = false;

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

                        editGalleryForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Edit ",err)
}
