$(document).ready((function(){$(".btn-like").click((function(){var i=$(this).data("lid");$.ajax({url:"controls/downloader/action.php",type:"POST",data:{likeid:i,action:1},beforeSend:function(){$(".btn-like").children("div").attr("data-kt-indicator","on")},success:function(i){$(".btn-like").children("div").attr("data-kt-indicator","off"),v=JSON.parse(i),$(".btn-like").children("div").children("div").html(v.likes),$(".btn-like").children("div").next("div").html(v.numshortlikes)}})})),$(".btn-dislike").click((function(){var i=$(this).data("lid");$.ajax({url:"controls/downloader/action.php",type:"POST",data:{likeid:i,action:0},beforeSend:function(){$(".btn-dislike").children("div").attr("data-kt-indicator","on")},success:function(i){$(".btn-dislike").children("div").attr("data-kt-indicator","off"),v=JSON.parse(i),$(".btn-dislike").children("div").children("div").html(v.dislikes),$(".btn-dislike").children("div").next("div").html(v.numshortdislikes)}})}))}));