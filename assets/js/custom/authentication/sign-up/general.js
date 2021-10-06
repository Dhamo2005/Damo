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
            student_id: {
              validators: {
                notEmpty: { message: "Please Enter Your Student ID" },
              }
            },
            Medium: {
              validators: {
                notEmpty: { message: "Please Select Your Medium" },
              },
            },
            gender: {
              validators: {
                notEmpty: { message: "Please Select Your Gender" },
              },
            },
            about: {
              validators: {
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
                }
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
            a.validate().then(function (a) {
              if ("Valid" == a) {
                var name = $('#name').val();
                var email   =$('#email').val();
                var phone_number = $('#phone_number').val();
                var classs = $('#classs').val();
                var medium = $('#medium').val();
                var about = $('#about').val();
                var place = $('#place').val();
                var gender = $('#gender').val();
                var password = $('#password').val();
                var confirm_password = $('#confirm_password').val();
                var type = $('#type').val();
                $.ajax({
                url: "../server/insert.php",
                method: "POST",
                data: {
                  name:name,
                  phone_number:phone_number,
                  email:email,
                  classs:classs,
                  medium:medium,
                  about:about,
                  place:place,
                  type:type,
                  gender:gender,
                  password:password,
                  confirm_password:confirm_password
                },
                success: function (data) {
                  if(data == 1){
                    Swal.fire({
                      text: "Thanks For Filling This Form!",
                      icon: "success",
                      buttonsStyling: !1,
                      confirmButtonText:
                        "<a class='text-white'>Ok, got it!</a>",
                      customClass: { confirmButton: "btn btn-primary" },
                    });
                  }else{
                  t.setAttribute("data-kt-indicator", "on"),
                  (t.disabled = !0),
                  setTimeout(function () {
                    t.removeAttribute("data-kt-indicator"),
                      (t.disabled = !1),
                      Swal.fire({
                        text:data,
                        icon: "warning",
                        buttonsStyling: !1,
                        confirmButtonText: data,
                        customClass: { confirmButton: "btn btn-warning" },
                      });
                  }, 1500);
                }},
              });
              } else {
                Swal.fire({
                  text:'Please Fill Out This Form'+data,
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: { confirmButton: "btn btn-primary" },
                });
              }
            });
        });
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTSignupGeneral.init();
});
