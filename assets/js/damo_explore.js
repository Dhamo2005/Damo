function get_sub(o){o<=12&&o>10&&$("#sub").html('<option></option><option value="Tamil">Tamil</option><option value="English">English</option><option value="Maths">Maths</option><option value="Chemistry">Chemistry</option><option value="Physics">Physics</option><option value="Accounts">Accounts</option><option value="Comp-Science">Computer-Science</option><option value="Comp-App">Computer-Applications</option><option value="Comp-Tech">Computer-Technology</option><option value="Commerce">Commerce</option><option value="Biology">Biology</option><option value="Zoology">Zoology</option><option value="Economics">Economics</option><option value="BEE">Basic Electronic Engineering</option><option value="History">History</option>'),o<=10&&o>3&&$("#sub").html('<option></option><option value="Tamil">Tamil</option><option value="English">English</option><option value="Maths">Maths</option><option value="Science">Science</option><option value="Social Science">Social Science</option>'),o<=2&&o>0&&$("#sub").html('<option></option><option value="Tamil">Tamil</option><option value="English">English</option><option value="Maths">Maths</option><option value="Environmental Science">Environmental Science</option>')}$(document).ready((function(){get_sub($("#class").val())})),$("#class").change((function(o){cls=$(this).val(),get_sub(cls)}));