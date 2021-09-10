<?php include_once('default.php');
$row = $GLOBALS['con']->query("SELECT * FROM users WHERE id={$_SESSION['myid']}")->fetch_assoc();
?><div id="Profile Details" class="card mb-5 mb-xl-10">
    <div class="bg-primary card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <div class="card-title m-0">
            <h3 class="fw-bolder text-white m-0">Profile Details</h3>
        </div>
    </div>
    <div class="card mb-6 mb-xl-9" id="kt_scroll_basic_info" data-select2-id="select2-data-kt_scroll_basic_info">
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_basic_info" aria-expanded="true" aria-controls="kt_account_basic_info">
            <div class="card-title m-0">
                <h3 class="fw-boldest m-0">Basic Info</h3>
            </div>
        </div>
        <div id="kt_account_basic_info" class="collapse show" data-select2-id="select2-data-kt_account_basic_info">
            <form method="POST" id="kt_account_basic_info_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" data-select2-id="select2-data-kt_account_basic_info_form">
                <div class="card-body border-top p-9" data-select2-id="select2-data-8-szul">
                    <div class="row mb-6"><label class="col-lg-4 col-form-label fw-bold fs-6">Avatar</label>
                        <div class="col-lg-8">
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(<?php echo $row['avatar']; ?>)"></div><label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar"><i class="fa fa-edit fs-7"></i><input type="file" name="avatar" accept=".png, .jpg, .jpeg"><input type="hidden" name="avatar_remove"></label><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar"><i class="fa fa-trash-alt"></i></span><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar"><i class="fa fa-trash-alt"></i></span>
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                        </div>
                    </div>
                    <div class="row mb-6"><label class="col-lg-4 col-form-label required fw-bold fs-6">Name</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container"><input type="text" name="Name" class="form-control form-control-lg form-control-solid" value="<?php echo ($row['name']); ?>" placeholder="Full Name">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="row mb-6"><label class="col-lg-4 col-form-label required fw-bold fs-6">School</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container"><input type="text" name="School" class="form-control form-control-lg form-control-solid" placeholder="School Name" value="GBHSS, NEMILI">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="row mb-6"><label class="col-lg-4 col-form-label fw-bold fs-6"><span class="required">Phone Number</span><i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container"><input type="tel" name="phone" class="form-control form-control-lg form-control-solid" value="<?php echo ($row['phone_number']); ?>" placeholder="Phone number">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="row mb-6"><label class="col-lg-4 col-form-label fw-bold fs-6 required">Email Address</label>
                        <div class="col-lg-8 fv-row"><input type="text" name="Email" class="form-control form-control-lg form-control-solid" placeholder="example@gmail.com" value="<?php echo ($row['email']); ?>"></div>
                    </div>
                    <div class="row mb-6" data-select2-id="select2-data-7-g2yl"><label class="col-lg-4 col-form-label fw-bold fs-6"><span class="required">Class</span><i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" aria-label="option of origination" data-bs-original-title="Choose Your Class"></i></label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-6-i25h"><select name="class" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Class">
                                <option value="" data-select2-id="select2-data-3-kipr">Select Your Class...</option>
                                <option selected <?php if ($row['class'] == 9) {
                                                        echo "selected ";
                                                    } ?>value="9" data-select2-id="select2-data-13-v8eh">9th</option>
                                <option <?php if ($row['class'] == 10) {
                                            echo "selected ";
                                        } ?>value="10" data-select2-id="select2-data-14-9hs6">10th</option>
                                <option <?php if ($row['class'] == 11) {
                                            echo "selected ";
                                        } ?>value="11" data-select2-id="select2-data-15-x80x">11th</option>
                                <option <?php if ($row['class'] == 12) {
                                            echo "selected ";
                                        } ?>value="12" data-select2-id="select2-data-16-rasv">12th</option>
                            </select></div>
                    </div>
                    <div class="row mb-6" data-select2-id="select2-data-7-g2yl"><label class="col-lg-4 col-form-label fw-bold fs-6"><span class="required">Medium</span><i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" aria-label="option of origination" data-bs-original-title="Choose Your Class"></i></label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container" data-select2-id="select2-data-6-i25h"><select name="medium" class="form-select form-select-solid" data-control="select2" data-placeholder="Select Medium">
                                <option value="">Select Medium</option>
                                <option value="Tamil" <?php if ($row['medium'] === "TM") {
                                                            echo " selected";
                                                        } ?>>Tamil</option>
                                <option value="English" <?php if ($row['medium'] === "EM") {
                                                            echo " selected";
                                                        } ?>>English</option>
                            </select></div>
                    </div>
                    <div class="row mb-6"><label class="col-lg-4 col-form-label fw-bold fs-6"><span class="required">Place</span><i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-bs-original-title="Enter Your Location" title="Enter Your Location" aria-label="Enter Your Location"></i></label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container"><input type="text" name="Place" class="form-control form-control-lg form-control-solid" value="<?php echo ($row['place']); ?>" placeholder="City / Town / Village">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                    <div class="row mb-6"><label class="col-lg-4 col-form-label required fw-bold fs-6">About</label>
                        <div class="col-lg-8 fv-row fv-plugins-icon-container"><input type="text" name="about" class="form-control form-control-lg form-control-solid" value="<?php echo ($row['about']); ?>" placeholder="Say Something About You!">
                            <div class="fv-plugins-message-container"></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9"><button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button><button type="submit" class="btn btn-primary" id="kt_account_basic_info_submit">Save Changes</button></div><input type="hidden">
                <div></div>
            </form>
        </div>
    </div>
</div><?php include_once('footer.php'); ?><script>
    "use strict";
    var KTAccountSettingsProfileDetails = function() {
        var e, t;
        return {
            init: function() {
                e = document.getElementById("kt_account_basic_info_form"), e.querySelector("#kt_account_basic_info_submit"), t = FormValidation.formValidation(e, {
                        fields: {
                            Name: {
                                validators: {
                                    notEmpty: {
                                        message: "First name is required"
                                    }
                                }
                            },
                            School: {
                                validators: {
                                    notEmpty: {
                                        message: "School name is required"
                                    }
                                }
                            },
                            phone: {
                                validators: {
                                    phone: {
                                        country: "IN",
                                        message: "The Plese Enter A Valid Phone Number",
                                    },
                                    lessThan: {
                                        message: "The Phone Number Will Be 10 Characters",
                                        max: 9999999999,
                                    },
                                    integer: {
                                        message: 'The value is not a valid integer number',
                                    },
                                    notEmpty: {
                                        message: "Contact phone number is required"
                                    },
                                }
                            },
                            Email: {
                                validators: {
                                    notEmpty: {
                                        message: "Please select a Email"
                                    },
                                    emailAddress: {
                                        message: 'Please enter a valid email address'
                                    }
                                }
                            },
                            class: {
                                validators: {
                                    notEmpty: {
                                        message: "Please Select Your Class"
                                    }
                                },
                            },
                            Medium: {
                                validators: {
                                    notEmpty: {
                                        message: "Please Select Your Medium"
                                    },
                                },
                            },
                            Place: {
                                validators: {
                                    notEmpty: {
                                        message: "Please Enter Your Location"
                                    },
                                    stringLength: {
                                        min: 4,
                                        message: "Please Enter Your Location"
                                    },
                                },
                            },
                            about: {
                                validators: {
                                    notEmpty: {
                                        message: "Please Say About You"
                                    },
                                    stringLength: {
                                        min: 2,
                                        message: "Please Say About You"
                                    },
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            submitButton: new FormValidation.plugins.SubmitButton,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }), $(e.querySelector('[name="Email"]')).on("change", (function() {
                        t.revalidateField("Email")
                    })),
                        t.validate().then(function(a){
                            if(a = "Valid"){
                                
                            }
                        });
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTAccountSettingsProfileDetails.init()
    }));
</script>