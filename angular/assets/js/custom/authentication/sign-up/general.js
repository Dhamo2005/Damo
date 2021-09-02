"use strict";
var email   =$('#email').val();
var KTSignupGeneral = (function () {
  var e,
    t,
    a,
    s,
    r = function () {
      return 100 === s.getScore();
    };
  return {
    init: function () {
      (e = document.querySelector("#kt_sign_up_form")),
        (t = document.querySelector("#kt_sign_up_submit")),
        (s = KTPasswordMeter.getInstance(
          e.querySelector('[data-kt-password-meter="true"]')
        )),
        (a = FormValidation.formValidation(e, {
          fields: {
            name: {
              validators: {
                notEmpty: { message: "Name Is Required" },
                stringLength: {
                  min: 2,
                  max: 25,
                  message: "Enter A Valid Name",
                },
              },
            },
            Medium: {
              validators: {
                notEmpty: { message: "Please Select Your Medium" },
              },
            },
            about: {
              validators: {
                notEmpty: { message: "Please Say About You" },
                stringLength: {
                  min: 2,
                  message: "Please Say About You",
                },
              },
            },
            Place: {
              validators: {
                notEmpty: { message: "Please Enter Your Location" },
                stringLength: {
                  min: 4,
                  message: "Please Enter Your Location",
                },
              },
            },
            type: {
              validators: {
                notEmpty: { message: "Please Choose Your category" },
                stringLength: {
                  min: 4,
                  message: "Please Enter Your Location",
                },
              },
            },
            Avatar: {
              validators: {
                file: {
                  extension: "jpeg,jpg,png",
                  type: "image/jpeg,image/png",
                  maxSize: 2097152, // 2048 * 1024
                  message: "The selected file is not valid",
                },
              },
            },
            "Phone-Number": {
              validators: {
                notEmpty: { message: "The Plese Enter A Valid Phone Number" },
                phone: {
                  country: "IN",
                  message: "The Plese Enter A Valid Phone Number",
                },
                lessThan: {
                  message: "The Phone Number Will Be 10 Characters",
                  max: 9999999999,
                },
              },
            },
            class: {
              validators: { notEmpty: { message: "Please Select Your Class" } },
            },
            email: {
              validators: {
                notEmpty: { message: "Email address is required" },
                emailAddress: {
                  message: "The Value Is Not A Valid Email Address",
                },
                remote: {
                  data: {
                    email: email,
                  },
                  message: 'The Email Already Registerd.&nbsp;&nbsp;<a href="../sign-in/basic.php">Sign In&nbsp;&nbsp;</a>OR&nbsp;&nbsp;<a href="../sign-in/basic.php">Reset Password</a>',
                  method: 'POST',
                  url: '../server/chkemail.php',
              }
              },
            },
            password: {
              validators: {
                notEmpty: { message: "The Password Is Required" },
                callback: {
                  message: "Please Enter Valid Password",
                  callback: function (e) {
                    if (e.value.length > 0) return r();
                  },
                },
              },
            },
            "confirm-password": {
              validators: {
                notEmpty: { message: "The Password Confirmation Is Required" },
                identical: {
                  compare: function () {
                    return e.querySelector('[name="password"]').value;
                  },
                  message: "The Password And Its Confirm Are Not The Same",
                },
              },
            },
            toc: {
              validators: {
                notEmpty: {
                  message: "You must accept the terms and conditions",
                },
              },
            },
          },
          plugins: {
            trigger: new FormValidation.plugins.Trigger({
              event: { password: !1 },
            }),
            bootstrap: new FormValidation.plugins.Bootstrap5({
              rowSelector: ".fv-row",
              eleInvalidClass: "",
              eleValidClass: "",
            }),
          },
        })),
        t.addEventListener("click", function (r) {
          r.preventDefault(),
            a.revalidateField("password"),
            a.validate().then(function (a) {
              if ("Valid" == a) {
                var name = $('#name').val();
                var email   =$('#email').val();
                var phone_number = $('#phone_number').val();
                var classs = $('#classs').val();
                var medium = $('#medium').val();
                var about = $('#about').val();
                var place = $('#place').val();
                var type = $('#type').val();
                var password = $('#password').val();
                var confirm_password = $('#confirm_password').val();
                $.ajax({
                url: "../server/insert.php",
                method: "POST",
                data: {
                  name:name,
                  email:email,
                  phone_number:phone_number,
                  classs:classs,
                  medium:medium,
                  about:about,
                  place:place,
                  type:type,
                  password:password,
                  confirm_password:confirm_password
                },
                success: function (data) {
                  if(data == 1){
                    setTimeout(function(){
                      window.location.href = "../pages/sign-in.php?c";
                    },1500);
                    Swal.fire({
                      text: "Registration Success!",
                      icon: "success",
                      buttonsStyling: !1,
                      confirmButtonText: "<a href='../sign-in/basic.php' class='text-white'>Ok, got it!</a>",
                      customClass: { confirmButton: "btn btn-primary" },
                    });
                  }else{
                  t.setAttribute("data-kt-indicator", "on"),
                  (t.disabled = !0),
                  setTimeout(function () {
                    t.removeAttribute("data-kt-indicator"),
                      (t.disabled = !1),
                      Swal.fire({
                        text:
                          "Sorry, some technical issue found.Please try again.",
                        icon: "warning",
                        buttonsStyling: !1,
                        confirmButtonText: data,
                        customClass: { confirmButton: "btn btn-warning" },
                      });
                      // .then(function (t) {
                      //   t.isConfirmed && (e.reset(), s.reset());
                      // });
                  }, 1500);
                }},
              });
              } else {
                Swal.fire({
                  text:
                    "Sorry, looks like there are some errors detected, please try again.",
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: { confirmButton: "btn btn-primary" },
                });
              }
            });
        }),
        e
          .querySelector('input[name="password"]')
          .addEventListener("input", function () {
            this.value.length > 0 &&
              a.updateFieldStatus("password", "NotValidated");
          });
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSignupGeneral.init();
});
