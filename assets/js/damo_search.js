function load_trends(){$.ajax({type:"GET",url:"pages/trending_tags.php",beforeSend:function(){$("trending_tags").html('<div data-kt-indicator="on"><span class="ps-4 fs-6 indicator-progress">Loading...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span></div>')},success:function(n){$("trending_tags").html(n),$("trending_tags").prepend('<h4 class="text-black m-2">Trending Tags:</h4>')},error:function(n,s){setTimeout((()=>{$.ajax(this)}),1500)}})}$(document).ready((function(){load_trends()}));