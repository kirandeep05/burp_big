<?php include_once('header.php')?>
<?php include_once('page_banner.php')?>

<!-- css shift from here to the custom.css ---->

<section class="list_sec mt">
    <div class="wrapper col-md-12">
        <div class="col-md-3">
        
        	<h3 class="lishd fltr">Filters</h3>
            <div class=" left_sec1">
            
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
                <div class="dropdown_head1">Click to Filter<span class="math_sign1">+</span></div>
                <hr>
                <div class="dropdown_menu1">
                </div>
                </div>	
                                
                <div class="fltr_o">
                <div class="fltr_hd">Establishment Type</div>
                <hr>
                <div class="dropdown_head3">Click to Filter<span class="math_sign3">+</span></div>
                <hr>
                <div class="dropdown_menu3">						
                </div>
                </div>
                
                <div class="fltr_o">
                <div class="fltr_hd">Value for two</div>
                </div>
                <hr/>
            
            
                <div class="dropdown_head4">Click to Choose<span class="math_sign4">+</span></div>
                <hr>
                
                <div class="dropdown_menu4">
                    <div class="fltr_list"><input class="s_filter" type="radio" name="vft" value="-250">Less than Rs. 250</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="vft" value="250-500">Rs. 250 to Rs. 500</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="vft" value="500-1000">Rs. 500 to Rs. 1000</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="vft" value="1000-2000">Rs. 1000 to Rs. 2000</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="vft" value="2000-">More than Rs. 2000</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="vft" value="">All</div>
                </div>
            
            
            
                <div class="fltr_o">
                <div class="fltr_hd">Reserve table</div>
                </div>
                <hr/>
                <div class="dropdown_head5">Click to filter<span class="math_sign5">+</span></div>
                <div class="dropdown_menu5">
                    <div class="fltr_list"><input class="s_filter" type="radio" name="rt" value="1">Yes</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="rt" value="0">No</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="rt" value="">All</div>
                </div>
            	<hr/>
                <div class="fltr_o">
                <div class="fltr_hd">Banquets</div>
                </div>
                <hr/>
                <div class="dropdown_head6">Click to find<span class="math_sign6">+</span></div>
                <div class="dropdown_menu6">
                    <div class="fltr_list"><input class="s_filter" type="radio" name="bs" value="yes">Yes</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="bs" value="no">No</div>
                    <div class="fltr_list"><input class="s_filter" type="radio" name="bs" value="">All</div>
                </div>
            
                <hr/>
                <div class="dropdown_head7">More Filters<span class="math_sign7">+</span></div>
                <div class="dropdown_menu7">
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Open at 2:35 PM</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">In Collections</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Pure veg</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Alcohol Served</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Buffet</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Happy hours</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">wifi</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Breakfast</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Lunch</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Dinner</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">No Alcohol</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Fine Dinning</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Outdoor seating</div>
                    <div class="fltr_list"><input type="checkbox" name="cuisines" value="-250">Rooftop seating</div>
                </div>
                
                <div class="fltr_o">
                <div class="fltr_hd"><button id="search_filter">Search</button></div>
                </div>
            
            </div>
        </div>

        
        <div class="col-md-6">
        	<h3 class="lishd loc">Chandigarh Restaurants</tr></h3>
            <div class="searchResults">        
            </div>
            <div id="pg_search" class="pagination_search_1"></div>
        </div>
        
        <div class="col-md-3">
            <h3 class="lishd spo">Sponsored</h3>
            <div class="sponlist_o"></div>
        </div>
    </div>
</section>
<div id="alacarte_links" class="gall-img"></div>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 

include_once '../admin/API/Search.class.php';
include_once '../admin/include/Connection.class.php';
$query_string = isset($_GET['s'])?$_GET['s']:"";
$loc = isset($_GET['loc'])?$_GET['loc']:"";
$cuisine = isset($_GET['cuisine'])?$_GET['cuisine']:"";
$est = isset($_GET['est'])?$_GET['est']:"";
$searchObj = new Search();

$total_results = count($searchObj->getHotelIdsFromSearchValues($query_string));
$per_page = 10;
$total_pages = ceil($total_results/$per_page);
?>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.js"></script>
<script>
$(window).load(function(){
    $(".main_bg").css("height", "350px");
})


    $(document).ready(function(){
        //console.log("search: "+$(location).attr('search').substring(1));
        var search_att = '<?php echo $query_string ?>';        
        var init_load = loadResults(search_att,'<?php echo $loc; ?>');
        var global_hotel_ids = init_load.hotel_ids;
        console.log(global_hotel_ids);
        populateResults(init_load,0,<?php echo $per_page; ?>);
        $('.pagination_search_1').bootpag({
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

                var limit = (num*<?php echo $per_page ?>) - <?php echo $per_page ?>;
               //console.log("Search att: "+search_att+" and limit is "+limit);                
                populateResults(init_load,limit,<?php echo $per_page; ?>);
                //console.log(num);

            });
                
                
            function loadResults(search_att,loc)
            {
                var res;
                $.ajax({
                    url: "../admin/API/index.php",
                    type: "POST",
                    dataType: 'JSON',
                    async: false,
                    data: {type: 'search',search_value: search_att, loc:loc},
                    success: function (response) {
                       res = response;
                    },
                        error: function (response) {
                                       console.log(response);
                                   }
                     });
                     return res;
            }
            
            function populateResults(response,start,len) 
            {          
                        var result = new Array();
                        var lim = 0;
                        if(response.count > (start+len)) {
                            lim = start+len;
                        } else {
                            lim = response.count;
                        }
                        for(var i=start;i<lim;i++) {
                            result.push(response.result[i]);
                        }
                        //console.log(result);
                        var html = "No Results Found";
                        if (response.count>0)
                        {
                        html='';
                        $.each(result,function (key,value){
                            //console.log("Booking: "+value.Booking);
                            if(value.Seating == "" || value.Seating == "None") {
                                value.Seating = "Take Away";
                            }
                            var split_tags = value.Collections.split(",");
                            var tags_arr = new Array();
                            for(var k=0;k<split_tags.length; k++) {
                                tags_arr.push("<a href='reslist.php?s="+split_tags[k]+"'>"+split_tags[k]+"</a>");
                            }
							
		html+='<div class="single_addres">';
		html+='<div class="col-8 fleft add_l_side">';
		html+='<div class="ho hname"> <a href="singleres.php?hotel_id='+value.hotel_id+'"> '+value.hotel_name+' </a> </div>';
		html+='<div id="tags" class="tgo"><img src="img/tag.png" alt="tags" title="Main tags"/><a href="#" class="" target="_blank">'+tags_arr.join(", ")+'</a></div>';
		html+='<div class="lao">'+ value.Address+'</div>';
		html+='<div class="dao">'+value.Seating+' > '+ value.Cuisine+'</div>';
		html+='<div class="dao"><b>Value for two:</b>'+ value["Value for 2"]+'</div>';
		html+='</div>';
		html+='<div class="col-4 fright rgt_r_side">';
		html+='<div class="lbo"><a href="#" class="menu_single" id="'+value.hotel_id+'">Menu</a></div>';
                if(value.Booking == 1) {
                    html+='<div class="lbo"><a href="singlres.php?hotel_id='+value.hotel_id+'">Book table</a></div>';
                }
		html+='<div class="lbo"><a href="">Offer</a></div>';
		html+='</div>';
		html+='<div class="clr"></div>';
		html+='</div>';													
							
               });
                           // console.log(response.filters.locations);
                           if(typeof response.filters != 'undefined') {
                                $(".dropdown_menu2").html('');
                                $.each(response.filters.locations,function (key,value){
                                    var temp = ' <div class="fltr_list"><input type="checkbox" class="s_filter" name="locations" value="'+value+'"> '+value+'</div>';
                                    $(".dropdown_menu2").append(temp);
                                });

                                $(".dropdown_menu1").html('');
                                $.each(response.filters.cuisines,function (key,value){
                                    if(value == "") {
                                        return true;
                                    }
                                    var temp = ' <div class="fltr_list"><input type="checkbox" class="s_filter" name="cuisines" value="'+value+'"> '+value+'</div>';
                                    $(".dropdown_menu1").append(temp);
                                });

                                $(".dropdown_menu3").html('');
                                $.each(response.filters.est,function (key,value){
                                    if(value == "") {
                                        return true;
                                    }
                                    var temp = ' <div class="fltr_list"><input type="checkbox" class="s_filter" name="est" value="'+value+'"> '+value+'</div>';
                                    $(".dropdown_menu3").append(temp);
                                });
                               }
                        }
                        
                        $(".searchResults").html(html);
            }
            function filter()
            {
                $(".searchResults").html('<div class="single_addres" style="border:inherit; box-shadow: none; width: 100%; text-align: center; margin-top: 40px;" ><img src="img/ajax-loader.gif" /></div>');
                var loc = new Array();
                var cuisines = new Array();
                var est_arr = new Array();
                var vft = "";
                var rt = "";
                var bs = "";
                $('input[name="locations"]:checked').each(function() {
                    loc.push(this.value);
                });
                $('input[name="cuisines"]:checked').each(function() {
                    cuisines.push(this.value);
                });
                $('input[name="est"]:checked').each(function() {
                    est_arr.push(this.value);
                });
                $('input[name="vft"]:checked').each(function() {
                    console.log(this.value);
                    vft = this.value;
                });
                $('input[name="rt"]:checked').each(function() {
                    console.log(this.value);
                    rt = this.value;
                });
                $('input[name="bs"]:checked').each(function() {
                    console.log(this.value);
                    bs = this.value;
                });
                
                $.ajax({
                    url: "../admin/API/index.php",
                    type: "POST",
                    dataType: 'JSON',
                    data: {type: 'filter',hotel_ids: global_hotel_ids, loc:loc.join(","), cuisine:cuisines.join(","), est:est_arr.join(","), vft: vft,rt:rt,bs:bs},
                    success: function (response) {
                       populateResults(response,0,<?php echo $per_page ?>);
                       var pg_class = $("#pg_search").attr('class');
                       var pg_arr = pg_class.split("_");
                       var no = pg_arr[pg_arr.length - 1];
                       no++;
                       var pg_class_new = "pagination_search_"+no;
                       console.log("Page class new: "+pg_class_new);
                       $('#pg_search').addClass(pg_class_new);
                       $('#pg_search').removeClass(pg_class);
                       var per_page = '<?php echo $per_page ?>';
                       $('.'+pg_class_new).bootpag({
                            total: Math.ceil(response.count/per_page),
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
                             var limit = (num*<?php echo $per_page ?>) - <?php echo $per_page ?>;                           
                             populateResults(response,limit,<?php echo $per_page; ?>);
                             $('.s_filter').on("change click",function(){
                                filter();
                             });
                         });
                    },
                        error: function (response) {
                                       console.log(response);
                                   }
                     });
            }
            $('.s_filter').on("change click",function(){
                filter();
            });
            
            $('.menu_single').on("click",function(event){
                event.preventDefault();
                var hotel_id_temp = $(this).attr('id');                
                $.ajax({
                    url: "http://burpbig.com/admin/API/index.php",
                    type: "POST",
                    dataType: 'JSON',
                    data: {type: 'menu',hotel_id: hotel_id_temp},
                    success: function (response) {
                        $('#alacarte_links').html('');
                        for (i = 0; i < response.menu.Ala_Carte.length; i++) {
                            $('#alacarte_links').append('<a href="' + response.menu.Ala_Carte[i].image_path + '" data-gallery style="display: none;" ><img src="' + response.menu.Ala_Carte[i].image_path + '" style="display: none;"/></a>');
                        }
                        
                        blueimp.Gallery($('#alacarte_links a'), $('#blueimp-gallery').data());
                    },
                    error: function (response) {
                        console.log(response);
                    }
                });
            });
                        
            
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
                     html+= '<div class="spos_ads">';
                     html+= '      <img src="'+value.ad_cover_pic+'" class="ad_img"/>';
                     html+= '      <div class="ad_txt">';
                     html+= '         <a href="singleres.php?hotel_id='+value.ad_hotel_id+'"><b>'+value.hotel_name+'</b></a> <br />'+value.text;
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
			
			$(".dropdown_head5").click(function(){
				$(".dropdown_menu5").toggle(function(){
				if($(".math_sign5").html() == "+") {
					$(".math_sign5").html("-");
				}
				else {
					$(".math_sign5").html("+");
				}
				});
            })
			
			$(".dropdown_head6").click(function(){
				$(".dropdown_menu6").toggle(function(){
				if($(".math_sign6").html() == "+") {
					$(".math_sign6").html("-");
				}
				else {
					$(".math_sign6").html("+");
				}
				});
            })
			
			$(".dropdown_head7").click(function(){
				$(".dropdown_menu7").toggle(function(){
				if($(".math_sign7").html() == "+") {
					$(".math_sign7").html("-");
				}
				else {
					$(".math_sign7").html("+");
				}
				});
            })
			
        });
</script>
<?php include_once('footer.php'); ?>
