<?php include_once('header.php')?>
<?php include_once('page_banner.php')?>
<style>

    hr {
        margin-top: 6px;
        margin-bottom: 6px;
    }
    .dropdown_head1 {
        font-size: 16px;
        cursor: pointer;
    }
    .dropdown_menu1 {
        display:none;
    }
    .math_sign1 {
        float: right;
        font-size: 18px;
        margin-right: 15px;
    }
    .dropdown_head2 {
        font-size: 16px;
        cursor: pointer;
    }
    .dropdown_menu2 {
        display:none;
    }
    .math_sign2 {
        float: right;
        font-size: 18px;
        margin-right: 15px;
    }
    .dropdown_head3 {
        font-size: 16px;
        cursor: pointer;
    }
    .dropdown_menu3 {
        display:none;
    }
    .math_sign3 {
        float: right;
        font-size: 18px;
        margin-right: 15px;
    }
    .dropdown_head4 {
        font-size: 16px;
        cursor: pointer;
    }
    .dropdown_menu4 {
        display:none;
    }
    .math_sign4 {
        float: right;
        font-size: 18px;
        margin-right: 15px;
    }
</style>
<section class="list_sec mt">
    <div class="wrapper col-md-12">
        <div class="col-md-3">
				<h3 class="lishd">Filters</h3>
				<div class="fltr_list fltro">
                                    <div class="fltr_o">
						<div class="fltr_hd">Sort by</div>
                                    </div>
					
                        <div class="fltr_o">
                        <div class="fltr_hd">Location</div>
                            <hr>
                            <div class="dropdown_head2">Click to Filter<span class="math_sign2">+</span></div>
                            <hr>
                            <div class="dropdown_menu2">                               
                            </div>                                                
                        </div>
                        <div class="fltr_o">
                            <div class="fltr_hd">Cuisine</div>
                            <hr>
                            <div class="dropdown_head1">Popularity<span class="math_sign1">+</span></div>
                            <hr>
                            <div class="dropdown_menu1">
                                <div class="fltr_list">Popularity - high to low</div>
                                <div class="fltr_list">Rating - high to low</div>
                                <div class="fltr_list">Cost - high to low</div>
                                <div class="fltr_list">Cost - low to high</div>
                                <div class="fltr_list">Recently Added</div>
                            </div>
                        </div>					
                        <div class="fltr_o">
                        <div class="fltr_hd">Establishment Type</div>
                            <hr>
                            <div class="dropdown_head3">Click to Filter<span class="math_sign3">+</span></div>
                            <hr>
                            <div class="dropdown_menu3">
						<div class="fltr_list">Quick Bites</div>
                                                <div class="fltr_list">Region Dinning</div>
                                                <div class="fltr_list">Desert</div>
                                                <div class="fltr_list">Night Club</div>
                            </div>
                        </div>
                        <div class="fltr_o">
                                    <div class="fltr_hd">Value for two</div>
                        <hr>
                        <div class="dropdown_head4">Click to Choose<span class="math_sign4">+</span></div>
                        <hr>
                        <div class="dropdown_menu4">
                                    <div class="fltr_list">< 250</div>
                                    <div class="fltr_list">250-500</div>
                                    <div class="fltr_list">500-1000</div>
                                    <div class="fltr_list">1000-2000</div>
                                    <div class="fltr_list">2000 < </div>
                                    </div>
                        </div>
                    </div>
		</div>
        <div class="col-md-5">
        	<h3 class="lishd">Chandigarh Restaurants</tr></h3>
            <div class="searchResults">        
            </div>
            <div class="pagination_search"></div>
            
        </div>
        <div class="col-md-4">
        	<h3 class="lishd">Sponsored</h3>
            <div class="sponlist_o">             
            </div>
        </div>
    </div>
</section>
<?php 

include_once '../admin/admin/API/Search.class.php';
include_once '../admin/admin/include/Connection.class.php';
$query_string = htmlspecialchars(urldecode($_SERVER['QUERY_STRING']));
$searchObj = new Search();

$total_results = count($searchObj->getHotelIdsFromSearchValues($query_string));
$per_page = 10;
$total_pages = ceil($total_results/$per_page);
?>

<script>
$(window).load(function(){
    $(".main_bg").css("height", "350px");
})


    $(document).ready(function(){
        //console.log("search: "+$(location).attr('search').substring(1));
        var search_att = unescape($(location).attr('search').substring(1));
        loadResults(search_att,"0,<?php echo $per_page; ?>");
        $('.pagination_search').bootpag({
               total: <?php echo $total_pages ?>,
               page: 1,
               maxVisible: 10,
               href: "#pro-page-{{number}}",
               leaps: false,
               next: '>>',
               prev: '<<',
                firstLastUse: true,
                first: '<',
                last: '>'
            }).on('page', function(event, num){
                //$(".content3").html("Page " + num); // or some ajax content loading...

                var limit = ((num*<?php echo $per_page ?>) - <?php echo $per_page ?>)+","+(<?php echo $per_page ?>);
                console.log("Search att: "+search_att+" and limit is "+limit);
                loadResults(search_att,limit);
                //console.log(num);

            });
                
                
            function loadResults(search_att, limit)
            {
                $.ajax({
                    url: "../admin/admin/API/index.php",
                    type: "POST",
                    dataType: 'JSON',
                    data: {type: 'search',search_value: search_att, limit: limit},
                    success: function (response) {
                        console.log(response);
                        var html = "No Results Found";
                        if (response.count>0)
                        {
                        html='';
                        $.each(response.result,function (key,value){
                            if(value.Seating == "") {
                                value.Seating = "Take Away";
                            }
                            var split_tags = value.Collections.split(",");
                            var tags_arr = new Array();
                            for(var k=0;k<split_tags.length; k++) {
                                tags_arr.push("<a href='reslist.php?"+split_tags[k]+"'>"+split_tags[k]+"</a>");
                            }
                            html+='<div class="single_addres">';
                            html+='<table><tr><td><div class="hname"><a href="singleres.php?'+value.hotel_id+'"> '+value.hotel_name+'</a></div>';
                            html+='<div id="tags">'+tags_arr.join(", ")+'</div>';
                            html+='<div class="h_address">';
                            html+=value.Address;
                            html+='<br/>';
                            html+= value.Seating+' > ';
                            html+=value.Cuisine;
                            html+='<br/><b>Value for Two:</b> Rs. '+value["Value for 2"]+"<br />";
                            html+='</div></td><td> <div class="links"><a href="#">Menu</a><a href="#">Book Table</a><a href="#">Offer</a>';
                            html+='</div></td></tr></table></div>';
                        });
                        console.log(response.location);
                        $(".dropdown_menu2").html('');
                            $.each(response.location,function (key,value){
                                var temp = ' <div class="fltr_list"><input type="checkbox" value="'+value+'"> '+value+'</div>';
                                $(".dropdown_menu2").append(temp);
                            });
                        }
                        $(".searchResults").html(html);
                    },
                        error: function (response) {
                                       console.log(response);
                                   }
                     });
            }
                
            $.ajax({
             url: "http://burpbig.com/admin/API/index.php",
             type: "POST",
             dataType: 'JSON',
             data: {type: 'sponsored_ads',city_id: $.cookie('city_id')},
             success: function (response) {
                 //console.log(response);
                 //console.log('city_id'+$.cookie('city_id'));
                 var html = "";                    
                 html='';
                 $.each(response.ads,function (key,value){
                     //console.log('loop');
                     //console.log(value);
                     html+= '<div class="spos_ads" style="height: 138px; width: 63%">';
                     html+= '      <img src="'+value.ad_cover_pic+'" class="ad_img"/>';
                     html+= '      <div class="ad_txt">';
                     html+= '         <a href="singleres.php?'+value.ad_hotel_id+'"><b>'+value.hotel_name+'</b></a> <br />'+value.text;
                     html+= '      </div>';
                     html+= '</div>';
                 });

                 $(".sponlist_o").html(html);
             },
                 error: function (response) {
                                console.log(response);
                            }
              });


            $(".dropdown_head1").click(function(){
                $(".dropdown_menu1").toggle(function(){
                    if($(".math_sign1").html() == "+") {
                        $(".math_sign1").html("-");
                    }
                    else {
                        $(".math_sign1").html("+");
                    }
                });
            })

            $(".dropdown_head2").click(function(){
                $(".dropdown_menu2").toggle(function(){
                    if($(".math_sign2").html() == "+") {
                        $(".math_sign2").html("-");
                    }
                    else {
                        $(".math_sign2").html("+");
                    }
                });
            })

            $(".dropdown_head3").click(function(){
                $(".dropdown_menu3").toggle(function(){
                    if($(".math_sign3").html() == "+") {
                        $(".math_sign3").html("-");
                    }
                    else {
                        $(".math_sign3").html("+");
                    }
                });
            })

            $(".dropdown_head4").click(function(){
                $(".dropdown_menu4").toggle(function(){
                    if($(".math_sign4").html() == "+") {
                        $(".math_sign4").html("-");
                    }
                    else {
                        $(".math_sign4").html("+");
                    }
                });
            })
        })
</script>
<?php include_once('footer.php'); ?>
