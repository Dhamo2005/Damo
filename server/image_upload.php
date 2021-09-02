<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Bootstrap 4 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Croppie css -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<!-- Font Awesome 5 -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



<style type="text/css">
    .nounderline,
    .violet {
        color: #7c4dff !important;
    }

    .btn-dark {
        background-color: #7c4dff !important;
        border-color: #7c4dff !important;
    }

    .btn-dark .file-upload {
        width: 100%;
        padding: 10px 0px;
        position: absolute;
        left: 0;
        opacity: 0;
        cursor: pointer;
    }

    .profile-img img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
    }
</style>
<p>&nbsp;</p>
<div class="container">

    <h3 class="text-center mb-5">
        jQuery Image upload widget with preview and image cropping in Laravel
    </h3>

    <div class="d-flex justify-content-center p-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Image Upload Widget
<script type="php">echo 'hello';</script></h5>
                <div class="profile-img p-3">
                    <img src="/images/icon-cam.png" id="profile-pic">
                </div>
                <div class="btn btn-dark">
                    <input type="file" class="file-upload" id="file-upload" name="profile_picture" accept="image/*">
                    Upload New Photo
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Crop Image And Upload</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="resizer"></div>
                    <button class="btn rotate float-lef" data-deg="90">
                        <i class="fas fa-undo"></i></button>
                    <button class="btn rotate float-right" data-deg="-90">
                        <i class="fas fa-redo"></i></button>
                    <hr>
                    <button class="btn btn-block btn-dark" id="upload">
                        Crop And Upload</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  jQuery and Popper.js  -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<!-- Boostrap 4 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<!-- Croppie js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>


<script type="text/javascript">

    $(function () {
        var croppie = null;
        var el = document.getElementById('resizer');

        $.base64ImageToBlob = function (str) {
            // extract content type and base64 payload from original string
            var pos = str.indexOf(';base64,');
            var type = str.substring(5, pos);
            var b64 = str.substr(pos + 8);

            // decode base64
            var imageContent = atob(b64);

            // create an ArrayBuffer and a view (as unsigned 8-bit)
            var buffer = new ArrayBuffer(imageContent.length);
            var view = new Uint8Array(buffer);

            // fill the view, using the decoded base64
            for (var n = 0; n < imageContent.length; n++) {
                view[n] = imageContent.charCodeAt(n);
            }

            // convert ArrayBuffer to Blob
            var blob = new Blob([buffer], { type: type });

            return blob;
        }

        $.getImage = function (input, croppie) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    croppie.bind({
                        url: e.target.result,
                    });
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#file-upload").on("change", function (event) {
            $("#myModal").modal();
            // Initailize croppie instance and assign it to global variable
            croppie = new Croppie(el, {
                viewport: {
                    width: 200,
                    height: 200,
                    type: 'circle'
                },
                boundary: {
                    width: 250,
                    height: 250
                },
                enableOrientation: true
            });
            $.getImage(event.target, croppie);
        });

        $("#upload").on("click", function () {
            croppie.result('base64').then(function (base64) {
                $("#myModal").modal("hide");
                $("#profile-pic").attr("src", "../assets/media/avatars/Dhamo.jpg");

                var url = "{{ url('../assets/media/avatars/Dhamo.jpg') }}";
                var formData = new FormData();
                formData.append("profile_picture", $.base64ImageToBlob(base64));

                // This step is only needed if you are using Laravel
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost/server/image_upload.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        if (data == "uploaded") {
                            $("#profile-pic").attr("src", base64);
                        } else {
                            $("#profile-pic").attr("src", "/images/icon-cam.png");
                            console.log(data['profile_picture']);
                        }
                    },
                    error: function (error) {
                        console.log(error);
                        $("#profile-pic").attr("src", "/images/icon-cam.png");
                    }
                });
            });
        });

        // To Rotate Image Left or Right
        $(".rotate").on("click", function () {
            croppie.rotate(parseInt($(this).data('deg')));
        });

        $('#myModal').on('hidden.bs.modal', function (e) {
            // This function will call immediately after model close
            // To ensure that old croppie instance is destroyed on every model close
            setTimeout(function () { croppie.destroy(); }, 100);
        })
    });
</script>
<meta name="csrf-token" content="{{ csrf_token() }}">