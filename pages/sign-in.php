<?php session_start();
if (isset($_GET['out'])) {
    session_destroy();
    unset($_SESSION['email']);
    unset($_SESSION['name']);
} elseif (isset($_SESSION['email'])) {
    header("location:../");
} else {
} ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

<head>
    <meta charset="utf-8" />
    <title>TN School Study Materials | Damo Softwares</title>
    <meta name="description" content="TN School Study Materials | An Outstanding Solutions For Students & Teachers & Educators | Powered By Damo Softwares." />
    <meta name="keywords" content="10th, 11th, 12th, 1-8th School Study Materials & Books & Guieds Free Download | PDF" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../assets/media/logos/favicon.html" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="bg-white">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(../assets/media/illustrations/progress-hd.png)">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20"><a href="../" class="mb-2"><img alt="Logo" src="../assets/media/logos/Damo Softwares logo.svg" height="150px"></a>
                <div class="w-lg-600px bg-white rounded shadow-sm p-5 p-lg-15 mx-auto">
                    <form id="kt_sign_in_form" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_up_form" autocomplete="off">
                        < ?php if (isset($_GET['out'])) { echo ('<div class="rounded border-danger border-dashed bg-light-danger px-6 py-5"><span class="text-gray-600 fw-bold fs-6">
                                <center>You Are Succesfully Logged Out!</center>
                            </span>
                </div><br><br>');
                } ?><div class="mb-10 text-center">
                    <h1 class="mb-3 text-dark">Damo School Study Materials</h1>
                    <div class="fs-4 fw-bold text-gray-400">New Here? <a class="fw-bolder link-primary" href="sign-up.php">Create an Account</a></div>
                </div>
                <div class="fv-row mb-7 fv-plugins-icon-container has-success"><label class="form-label fw-bolder text-dark fs-6">Email</label><input id="email" class="form-control form-control-lg form-control-solid" type="email" placeholder="" name="email" autocomplete="off">
                    <div class="fv-plugins-message-container"></div>
                </div>
                <div class="mb-10 fv-row" data-kt-password-meter="true">
                    <div class="mb-1"><label class="form-label fw-bolder text-dark fs-6">Password</label>
                        <div class="position-relative mb-3"><input id="password" class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" autocomplete="off"><span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility"><i class="material-icons-outlined fs-1">visibility</i><i class="material-icons-outlined fs-1 d-none">visibility_off</i></i></div>
                    </div>
                </div>
                <div class="text-center"><button type="button" id="kt_sign_in_submit" class="btn btn-lg btn-primary"><span class="indicator-label">Submit</span><span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></button></div>
                <div></div>
                </form>
            </div>
            <div class="d-flex flex-center flex-column-auto p-10">
                <div class="d-flex align-items-center fw-bold fs-6"><a href="https://keenthemes.com/faqs" class="text-muted text-hover-primary px-2">About</a><a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a><a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a></div>
            </div>
        </div>
    </div>
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <script src="../assets/js/custom/authentication/sign-up/general.js"></script>
    <script>
        $(document).keydown(function(e) {
            (e.ctrlKey && 13 == e.keyCode || 13 == e.keyCode) && jQuery("#kt_sign_in_submit")[0].click();
        });
    </script>
    <script>
        "use strict";
        var KTSigninGeneral = function() {
            var t, n, e;
            return {
                init: function() {
                    t = document.querySelector("#kt_sign_in_form"), n = document.querySelector("#kt_sign_in_submit"), e = FormValidation.formValidation(t, {
                        fields: {
                            email: {
                                validators: {
                                    notEmpty: {
                                        message: "Email address is required"
                                    },
                                    emailAddress: {
                                        message: "The value is not a valid email address"
                                    }
                                }
                            },
                            password: {
                                validators: {
                                    notEmpty: {
                                        message: "The password is required"
                                    },
                                    callback: {
                                        message: "Please enter valid password",
                                        callback: function(t) {
                                            if (0 < t.value.length) return _validatePassword()
                                        }
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row",
                                eleInvalidClass: "",
                                eleValidClass: ""
                            })
                        }
                    }), n.addEventListener("click", function(t) {
                        t.preventDefault(), e.validate().then(function(t) {
                            if ("Valid" == t) {
                                var e = $("#email").val(),
                                    i = $("#password").val();
                                $.ajax({
                                    method: "POST",
                                    url: "../server/login.php",
                                    data: {
                                        email: e,
                                        password: i
                                    },
                                    beforeSend: function() {
                                        $("#kt_sign_in_submit").attr("data-kt-indicator", "on")
                                    },
                                    success: function(t) {
                                        1 != t ? ($("#kt_sign_in_submit").attr("data-kt-indicator", "off"), Swal.fire({
                                            text: "Wrong Login Details, Please Try Again.",
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        })) : (n.setAttribute("data-kt-indicator", "on"), n.disabled = !0, setTimeout(function() {
                                            n.removeAttribute("data-kt-indicator"), n.disabled = !1, Swal.fire({
                                                text: "Your Are Successfully Log In!",
                                                icon: "success",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Go To Home Page!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary"
                                                }
                                            }).then(setTimeout(function() {
                                                window.location.href = '<?php if (isset($_GET['c'])) {
                                                                            echo ('..' . $_GET['c']);
                                                                        } else {
                                                                            echo "../home.php";
                                                                        } ?>';
                                            }, 1e3))
                                        }))
                                    }
                                })
                            }
                            elseSwal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })
                        })
                    })
                }
            }
        }();
        KTUtil.onDOMContentLoaded(function() {
            KTSigninGeneral.init()
        })
    </script>

</html>