try {
    // Define form element
    const addRepositoryCategoryForm = document.getElementById('add_repository_category');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var addCategoryValidator = FormValidation.formValidation(
        addRepositoryCategoryForm,
        {
            fields: {
                'name': {
                    validators: {
                        notEmpty: {
                            message: 'Category name is required'
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
    const CategorySubmitButton = document.getElementById('add_category_submit');
    CategorySubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (addCategoryValidator) {
            addCategoryValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    CategorySubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    CategorySubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        CategorySubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        CategorySubmitButton.disabled = false;

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

                        addRepositoryCategoryForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Add ",err)
}

// Screen blockers
{
    var target = document.querySelector("#kt_post");
    var blockUI = new KTBlockUI(target);

}

function editRepositoryCategory(id) {
    console.log("Function calling",id)
    blockUI.block();
    $.ajax({
        url: "/adb/edit-repository-category/" + id,
        type: "GET",
        dataType: "json",
        success: function (data) {
            console.log("hi",data)
            $("#id").val(data.category.id);
            $("#cat_name").val(data.category.name);

            $("#edit_repository_category").modal("show");
            blockUI.release();
        },
        error: function () {
            $("#edit_repository_category").modal("hide");
            blockUI.release();
        }
    });
}


{
    function deleteRepositoryCategory(id) {
        Swal.fire({
            html: `Are you sure you want to delete this unit category?`,
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
                window.location.replace("/adb/delete-course-category/" + id);
            }
        });
    }
}

//Edit Category
try {
    // Define form element
    const editRepositoryCategoryForm = document.getElementById('edit_category_form');
// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
    var editCategoryValidator = FormValidation.formValidation(
        editRepositoryCategoryForm,
        {
            fields: {
                'cat_name': {
                    validators: {
                        notEmpty: {
                            message: 'Category name is required'
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
    const EditCategorySubmitButton = document.getElementById('edit_category_submit_button');
    EditCategorySubmitButton.addEventListener('click', function (e) {
        // Prevent default button action
        e.preventDefault();

        // Validate form before submit
        if (editCategoryValidator) {
            editCategoryValidator.validate().then(function (status) {
                console.log('validated!');

                if (status == 'Valid') {
                    // Show loading indication
                    EditCategorySubmitButton.setAttribute('data-kt-indicator', 'on');

                    // Disable button to avoid multiple click
                    EditCategorySubmitButton.disabled = true;

                    // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                    setTimeout(function () {
                        // Remove loading indication
                        EditCategorySubmitButton.removeAttribute('data-kt-indicator');

                        // Enable button
                        EditCategorySubmitButton.disabled = false;

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

                        editRepositoryCategoryForm.submit(); // Submit form
                    }, 1500);
                }
            });
        }
    });
} catch (err) {
    console.log("Edit ",err)
}
