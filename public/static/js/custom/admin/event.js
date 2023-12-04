try {
    // Define form element
    const addEventForm = document.getElementById('add_event_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addEventValidator = FormValidation.formValidation(
        addEventForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },

                // 'date': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Course thumbnail is required'
                //         }
                //     }
                // },
                'start_time': {
                    validators: {
                        notEmpty: {
                            message: 'Event start time and date is required'
                        }
                    }
                },
                'end_time': {
                    validators: {
                        notEmpty: {
                            message: 'Event end time and date is required'
                        }
                    }
                },
                // 'image': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Course category is required'
                //         }
                //     }
                // },
                'type': {
                    validators: {
                        notEmpty: {
                            message: 'Event type is required'
                        }
                    }
                },
                //
                // 'description': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Course category is required'
                //         }
                //     }
                // },
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
    const EventSubmitButton = document.getElementById('add_event_submit');
    EventSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addEventValidator) {
            addEventValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    EventSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    EventSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        EventSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        EventSubmitButton.disabled = false;

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

                        addEventForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add ",err)
}

// Delete Success Story
function deleteEvent(id) {
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
            window.location.replace("/adb/delete-event/" + id);
        }
    });
}

//Edit form
try {
    // Define form element
    const editEventForm = document.getElementById('edit_event_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editEventValidator = FormValidation.formValidation(
        editEventForm,
        {
            fields: {
                'title': {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },

                // 'date': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Course thumbnail is required'
                //         }
                //     }
                // },
                'start_time': {
                    validators: {
                        notEmpty: {
                            message: 'Event start time and date is required'
                        }
                    }
                },
                'end_time': {
                    validators: {
                        notEmpty: {
                            message: 'Event end time and date is required'
                        }
                    }
                },
                // 'image': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Course category is required'
                //         }
                //     }
                // },
                'type': {
                    validators: {
                        notEmpty: {
                            message: 'Event type is required'
                        }
                    }
                },
                //
                // 'description': {
                //     validators: {
                //         notEmpty: {
                //             message: 'Course category is required'
                //         }
                //     }
                // },
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
    const EditEventSubmitButton = document.getElementById('edit_event_submit');
    EditEventSubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editEventValidator) {
            editEventValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    EditEventSubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    EditEventSubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        EditEventSubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        EditEventSubmitButton.disabled = false;

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

                        editEventForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add ",err)
}
