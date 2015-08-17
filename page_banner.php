<script type="text/javascript">

	$(document).ready(function(){
            function search_val()
            {
                var srch = $(".srch").val();
                if(srch==""){
                     return;
                } else {
                    window.location.href="reslist.php?"+srch;
                }
            }
            $(".serch_text").click(function(){
                    search_val();
             });
             $('#ms-emails').on('keydown', function(e) {
                    if (e.which == 13) {
                        search_val();
                    }
                });
	});
</script>


<div class="main_bg" style="background-image:url(img/slider.jpg)">
	<h1 class = "text1"></h1>
    <font class = "text2">Book with us for the food you love</font>
    <span class = "text3">Just on your finger tip</span>

    <div class="searh_outer">
        <div class="srch_outer">
              <input type="text" class="srch" id="ms-emails" placeholder="Search Restaurants, cuisine or dish..."/>
              <input type="button" class="srch_bth" value="search"/>
              <div class="srch_bt">
              	<span class="srch_icon"></span>
              	<span class="serch_text">Search</span>
              </div>
        </div>
    </div>

</div>