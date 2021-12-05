<?php
include('default.php');
?>
<select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
    data-placeholder="Select subject..." name="subject">
    <option value="">Select subject...</option>
    <pre>
    <d_subjects>

    </d_subjects>
</pre>
</select>
<script>
    $('d_subjects').html(``);
    class tn_subjects {
        one_two() {
            const arrayLike = {
                'Tamil': 'Tamil', 'English': 'English', 'Maths': 'Maths', 'Environmental Science': 'Environmental Science'
            };
            console.log(arrayLike);
        }
        three_ten() {
            // return ['Tamil' : 'Tamil', 'English' : 'English', 'Maths' : 'Maths', 'Science' : 'Science', 'Social Science' : 'Social Science'];
        }
    }
    var s = new tn_subjects;
</script>
<?php
include('footer.php');
?>