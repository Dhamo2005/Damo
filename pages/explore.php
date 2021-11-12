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
                    <option <?php if ($_SESSION['medium'] == 'TM') {
                                echo 'selected';
                            } ?> value="TM">TM</option>
                    <option <?php if ($_SESSION['medium'] == 'EM') {
                                echo 'selected';
                            } ?> value="EM">EM</option>
                </select>
            </div>
            <div class="col-md-4 gy-7">
                <label for="class" class="form-label">Standard</label>
                <input type="number" id="class" max="12" required min="1" name="class" value="<?php echo $_SESSION['std']; ?>" class="form-control">
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary btn-sm fs-4 mt-5 d-inline-flex">Search <span class="my-auto ms-2 fa fa-search"></span></button>
            </div>
        </form>
    </fieldset>
</div>
<div class="d-flex justify-content-end">
    <a href="feedback.php" class="m-4 p-2 fs-5 text-hover-dark text-gray-500 text-decoration-underline" onmouseover="this.style.textDecoration = 'underline overline'">
        Send Feedback
    </a>
</div>

<script src="assets/js/damo_explore.js"></script>