<div class="noselect shadow">
    <legend class="text-center bg-primary p-2 m-0 text-white fs-2">Explorer</legend>
    <fieldset class="card p-4" style="border-top-left-radius: 0;border-top-right-radius: 0;">
        <form class="row g-3 d-flex" autocomplete="off">
            <div class="col-md-4 gy-7">
                <label for="sub" class="form-label">Subject</label>
                <select class="form-select form-select-solid" id="sub" required name="sub" data-control="select2" data-placeholder="Choose Subject">
                    
                </select>
            </div>
            <div class="col-md-4 gy-7">
                <label for="med" class="form-label">Medium</label>
                <select id="med" id="med" name="med" required class="form-select">
                    <option <?php if($_SESSION['medium'] == 'TM'){echo 'selected';}?> value="TM">TM</option>
                    <option <?php if($_SESSION['medium'] == 'EM'){echo 'selected';} ?> value="EM">EM</option>
                </select>
            </div>
            <div class="col-md-4 gy-7">
                <label for="class" class="form-label">Standard</label>
                <input type="number" id="class" max="12" required min="1" name="class" value="<?php echo $_SESSION['std']; ?>" class="form-control">
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary fs-4 mt-5 d-inline-flex">Search <span class="my-auto ms-2 fa fa-search"></span></button>
            </div>
        </form>
    </fieldset>
    <?php 
    // print_r($_SESSION);
    
    //                 $std = $_SESSION['std'];
    //                 if ($std > 10 && $std >= 12) {
    //                     echo '<option></option><option value="Tamil">Tamil</option><option value="English">English</option><option value="Maths">Maths</option><option value="Science">Science</option><option value="Social Science">Social Science</option>';
    //                 } elseif ($std <=2 && $std >0){
    //                     echo '<option></option><option value="Tamil">Tamil</option><option value="English">English</option><option value="Maths">Maths</option><option value="Environmental Scince">Environmental Scince</option>';
    //                 }
                    ?>
</div>
<script>
    $('#class').change(function(e) {
        cls = $(this).val();
        if (cls <= 12 && cls > 10) {
            $('#sub').html('<option></option><option value="Tamil">Tamil</option><option value="English">English</option><option value="Maths">Maths</option><option value="Chemistry">Chemistry</option><option value="Physics">Physics</option><option value="Accounts">Accounts</option><option value="Computer-Science">Computer-Science</option><option value="Computer-Applications">Computer-Applications</option><option value="Computer-Technology">Computer-Technology</option><option value="Commerce">Commerce</option><option value="Biology">Biology</option><option value="Zoology">Zoology</option><option value="Economics">Economics</option><option value="EEE">English</option><option value="History">History</option>');
        } if(cls <= 10 && cls > 3){
            $('#sub').html('<option></option><option value="Tamil">Tamil</option><option value="English">English</option><option value="Maths">Maths</option><option value="Science">Science</option><option value="Social Science">Social Science</option>');
        } if(cls <= 2 && cls > 0){
            $('#sub').html('<option></option><option value="Tamil">Tamil</option><option value="English">English</option><option value="Maths">Maths</option><option value="Environmental Science">Environmental Science</option>');
        }
    });
</script>
