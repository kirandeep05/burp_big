<?php 
include_once('header.php');
//include_once '../admin/include/Connection.class.php';
include_once '../admin/API/Restaurant.class.php';
$hotel_id = isset($_GET['hotel_id'])?$_GET['hotel_id']:"";

// Get Dinning Details Based on Hotel Id
$restaurant = new Restaurant();
$dinning_details = $restaurant->getDinningDetails($hotel_id);

//print_r($dinning_details);

?>
<section>
	<div class="main_bg hotel_img" style="background-image:url(img/single_hotel.jpg)">
            <font class="text1" style="background-color: rgba(77, 75, 75, 0.63); bottom: 46px"></font>
         <div class="searh_outer">
        <div class="srch_outer">
            <input type="text" id="ms-emails" class="srch" placeholder="Search Restaurants, cuisine or dish..."/>
              <input type="button" class="srch_bth" value="search"/>
              <div class="srch_bt">
                <span class="srch_icon"></span>
                <span class="serch_text">Search</span>
              </div>
        </div>
    </div>
    </div>
</section>
<?php include_once('search.php')?>
<section class="mt">
	<div class="wrapper">
    	<div class="col-md-3">
        	<div class="left_sec">
            <div class="left_sec1">
            	
                <div class="lsecho">
                	<span class="lsec_hd">Call us at</span>
                	<span class="connum">+91-9780123456</span>
                </div>
                
                <!--<div class="lsecho linktab_outter">
                	<div class="linktab">
                    	<a href="">
                		<span>7</span>
                    	<span>Reviews &gt;</span>
                        </a>
                    </div>
                    <div class="linktab">
                    	<a href="">
                		<span>8</span>
                    	<span>Photos &gt;</span>
                        </a>
                    </div>
                    <div class="linktab">
                    	<a href="">
                		<span>8</span>
                    	<span>Bookmarks</span>
                        </a>
                    </div>
                    <div class="linktab rbn">
                    	<a href="">
                		<span>18</span>
                    	<span>check ins</span>
                        </a>
                    </div>
                </div>-->
                                
                <div class="lsecho" id="cuisines">
                	<span class="lsec_hd">Cuisines</span>                    
                </div>
                
                <div class="lsecho" id="opening_hours">
                    <span class="lsec_hd">Opening hours <a href="#">(See more+)</a></span>
                </div>
                
                <div class="lsecho">
                    <span class="lsec_hd">AVAILABLE</span>
                    <ul class="mainlst" id="available_ul">
                        
                    </ul>
                </div>
                
                <div class="lsecho">
                    <span class="lsec_hd">NOT AVAILABLE</span>
                    <ul class="mainlst" id="not_available_ul">                        
                       
                    </ul>
                </div>
                
                <div class="lsecho">
                    <span class="lsec_hd">Visitor Attraction</span>
                    <span class="lfttxt" id="visitor_attraction"></span>
                </div>
                
                <!--<div class="lsecho">
                    <span class="lsec_hd">First Review by</span>
                    <ul class="mainlst">
                        <li class="">
                        <div class="proouter">
                        	<span class="profileimg"><img src="img/profile[ic.jpg"/></span>
                        </div>
                        <div class="profdata">
                        	<span class="pname">Vijay Sharma</span>
                        	<span class="rvtxt"><a href="#">1 review</a> , <a href="">0 followers</a> </span>
                        </div>
                        </li>	                        
                    </ul>
                </div>-->
                
                <div class="lsecho" id="value_for_2">
                    <span class="lsec_hd">Value for 2</span>
                </div>
                
                <div class="lsecho" id="address">
                    <span class="lsec_hd">Address</span>
                </div>
                
                <div class="lsecho">
                    <span class="lsec_hd">Location</span>                    
					<script src="http://maps.googleapis.com/maps/api/js"></script>
                    <script>
                    function initialize() {
                    var mapProp = {
                    center:new google.maps.LatLng(51.508742,-0.120850),
                    zoom:5,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
                    google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                    <div id="googleMap" style="width:100%;height:150px;"></div>
                </div>
                
            </div>
            </div>
        </div>
    	<div class="col-md-6">
        	<div class="bt_o">
            	<ul>
                	<li><a id="alacarte" href="javascript:void(0)">Ala carte menu</a></li>
                	<li><a id="buffet" href="javascript:void(0)">Buffet menu</a></li>
                        <li><a id="barmenu" href="javascript:void(0)" class="">Bar menu</a></li>
                	<li><a id="gallery" href="javascript:void(0)" class="">Gallery</a></li>
                	<li><a id="banquits" href="javascript:void(0)" class="">Banquet</a></li>
                </ul>
            </div>
                        

            <div class="tbl_book">
				<form id="bookingForm" validate="true">
            <div class="in_pop">
                <div class="flds_o">
                    <div class="hide_list">
                    <button id="cbox">Cancel</button>
                    </div>
                    
                        <div class="stm">
                    <label>Food</label>
                    <select name="food" id="food"  tabindex="1" required>
                    <?php foreach ($dinning_details as $detail){?>
                    <option value="<?=$detail['dinning_id']?>"><?=$detail['dinning_name']?></option>
                   <?php }?>
                    </select>
                    </div>
                    <div class="stm">
                    <label>Select date</label>
                    <input name="date" type="text" class="dt_sel" id="datepicker" data-hotel="<?=$hotel_id;?>" placeholder="Please select date here" required>
                    </div>
                    
                    <div class="stm">
                    <label>Select total member</label>
                    <select name="t_memb" id="t_memb" tabindex="1" data-hotel="<?=$hotel_id;?>" required>
                    
                    </select>
                    </div>
                    

                    
                    <div class="stm">
                    <label>Time Range <span style="color:red" id="avail_hours">Avl. ()</span></label>
                     <input name="star_time" type="text" placeholder="Start Time" id="timepickerStart" class="dt_sel dt_sel_half" required>
                     <label style="float: left; width: 3%; margin-left: 6px;">To</label>
                     
					<input name="end_time" type="text" placeholder="End Time" id="timepickerEnd" class="dt_sel dt_sel_half" required>
                    </div>
                    

                    
                
                    
                    <div class="stm">
                    <label>Type</label>
                    <select name="type" id="type" tabindex="1" required="true">
                    <option value="Buffet">Alacarte</option>
                    <option value="Lunch">Buffet</option>
                    </select>
                    </div>

                    <div class="stm">
                    <label>Other</label>
                    <textarea class="txtarea_box" name="others"></textarea>
                    </div>
                </div>
                <div class="carea">
                <input type="checkbox" required="true"/> Sample terms and condition text. "We are constantly changing and improving our Services. We may add or remove functionalities or features of the Services at any time, and we may suspend or stop a Service altogether".
                </div>
                <div class="pr_bt_o">
                	<input type="submit" class="pbbt" id="chkout" value="Checkout" />
                </div>
                </form>
            </div>
            
            <div class="ck_pop">
                <div class="flds_o">
                	<div class="hide_list">
                    	<button id="ebox" class="eicon"></button>
                    </div>
                    
                    <div class="stm_full">
                        <div class="chk_detail">Thank you for booking your table with us, you have booked a table <?php echo "buffet" ?> 
                            for
                            <b><?php echo "4 members" ?></b>
                            on
                            <b><?php echo "6-7-2014,lunch" ?></b> timing <b><?php echo "3pm -4pm" ?> </b>
                            at
                            <b><?php echo "Hotel name" ?></b>.
                            With your special order of 
                            <b><?php echo "sample text" ?></b>
                        </div>
                        
                        <div class="pco">
                       		<input type="text" placeholder="Promo code if any" class="ptf"/>
                            <input type="submit" value="Apply" class="pcb"/>
                        </div>
                        
                        <div class="permision">
                            <div class="pdo"><span class="lbltx">Total</span><span class="ptxt">Rs 200</span></div>
                            <div class="pdo"><span class="lbltx">Discount</span><span class="ptxt">0</span></div>
                            <div class="pdo bbn"><span class="lbltx">Payable amount</span><span class="ptxt">Rs 200</span></div>
                        </div>
                        
                        <div class="tncfld">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </div>
                        
                    </div>
                </div>
                
                <div class="pr_bt_o">
                	<input type="submit" class="pbbt" id="sub" value="Proceed to payment" />
                </div>
                
            </div>
            
            
             <div class="tbl_book_image">
                <input id="rtable" type="button" value="Reserve Table" class="rsrvtbl"/>
              </div>
              
              
            </div>
			
        </div>
		

        <div id="alacarte_links" class="gall-img"></div>
        <div id="buffet_links" class="gall-img"></div>
        <div id="barmenu_links" class="gall-img"></div>
        <div id="gallery_links" class="gall-img"></div>
        <div id="banquits_links" class="gall-img"></div>


<!--    	<div class="col-md-3">
        	<div class="right_sec">
            	<?php //for($i=1 ; $i<=4 ; $i++) { ?>
					<div class="spos_ads">
						<img src="img/food.jpg" class="ad_img"/>
						<div class="ad_txt">
							lorem ipsum Simpli a dummy text
						</div>
					</div>
				<?php //} ?>
            </div>
        </div>-->

        <div class="col-md-3">
            <div class="right_sec" id="sponlist_o">        
                </div>
        </div>
    </div>
</section

><!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
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
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="js/bootstrap-image-gallery.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
                url: "http://burpbig.com/admin/API/index.php",
                type: "POST",
                dataType: 'JSON',
                data: {type: 'get_single_rest', hotel_id: $(location).attr('search').substring(1)},
                success: function (response) {
                   console.log(response);
                    $('.text1').text(response.hotel_name);
                    $('.connum').text(response.main_phone);
                     for(i=0; i<response.cuisines.length; i++) {
                        $('#cuisines').append('<span class="lfttxt">'+response.cuisines[i].name+'</span> <br>');
                     }
                    $('#opening_hours').append('<span class="lfttxt">Today ('+response.opening_time+' to '+response.closing_time+') <a href="#" class="link_bt_sm" style="color: white;">Open</a></span>');
                    for(i=0; i<response.available.length; i++) 
                       $('#available_ul').append('<li><span class=""></span>'+response.available[i]+'</li>');
                    for(i=0; i<response.not_available.length; i++) 
                       $('#not_available_ul').append('<li><span class=""></span>'+response.not_available[i]+'</li>');
                    $('#visitor_attraction').text(response.visitor_attraction);    
                    $('#value_for_2').append('<span class="lfttxt">$'+response.value_for_2+'</span> <br>');
                    $('#address').append('<span class="lfttxt">'+response.address+'</span> <br>') 
                    if(response.cover_pic !=='') 
                        $('.hotel_img').css('background-image','url('+response.cover_pic+')');


                    for(i=0; i< response.menu.Ala_Carte.length; i++)
                     $('#alacarte_links').append('<a href="'+response.menu.Ala_Carte[i].image_path+'" data-gallery style="display: none;" ><img src="'+response.menu.Ala_Carte[i].image_path+'" style="display: none;"/></a>');
                    for(i=0; i< response.menu.Buffet.length; i++)
                     $('#buffet_links').append('<a href="'+response.menu.Buffet[i].image_path+'" data-gallery style="display: none;" ><img src="'+response.menu.Buffet[i].image_path+'" style="display: none;"/></a>');
                    for(i=0; i< response.menu.Bar.length; i++)
                     $('#barmenu_links').append('<a href="'+response.menu.Bar[i].image_path+'" data-gallery style="display: none;" ><img src="'+response.menu.Bar[i].image_path+'" style="display: none;"/></a>');     
                    for(i=0; i< response.Banquet.length; i++)
                     $('#banquits_links').append('<a href="'+response.Banquet[i].image_path+'" data-gallery style="display: none;" ><img src="'+response.Banquet[i].image_path+'" style="display: none;"/></a>');  
                    for(i=0; i< response.Gallery.length; i++)
                     $('#gallery_links').append('<a href="'+response.Gallery[i].image_path+'" data-gallery style="display: none;" ><img src="'+response.Gallery[i].image_path+'" style="display: none;"/></a>');  
                 
                 
                     if(response.menu.Ala_Carte.length == 0) 
                         $("#alacarte").addClass("not_avl");
                     if(response.menu.Buffet.length == 0) 
                         $("#buffet").addClass("not_avl");
                     if(response.menu.Bar.length == 0) 
                         $("#barmenu").addClass("not_avl");
                     if(response.Banquet.length == 0) 
                         $("#gallery").addClass("not_avl");
                     if(response.Gallery.length == 0) 
                         $("#banquits").addClass("not_avl");
                },
                error: function (response) {
                    console.log(response);
                }
         });
        
        $('#alacarte').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery($('#alacarte_links a'), $('#blueimp-gallery').data());
        });

        $('#buffet').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery($('#buffet_links a'), $('#blueimp-gallery').data());
        });

        $('#barmenu').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery($('#barmenu_links a'), $('#blueimp-gallery').data());
        });

        $('#banquits').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery($('#banquits_links a'), $('#blueimp-gallery').data());
        });

        $('#gallery').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery($('#gallery_links a'), $('#blueimp-gallery').data());
        });
        
         $.ajax({
                url: "http://burpbig.com/admin/API/index.php",
                type: "POST",
                dataType: 'JSON',
                data: {type: 'sponsored_ads',city_id: $.cookie('city_id')},
                success: function (response) {
                    console.log(response);
                    //console.log('city_id'+$.cookie('city_id'));
                    var html = "";                    
                    html='';
                    $.each(response.ads,function (key,value){                        
                        console.log(value);
                        html+= '<div class="spos_ads">';
                        html+= '      <img src="'+value.ad_cover_pic+'" class="ad_img"/>';
                        html+= '      <div class="ad_txt">';
                        html+= '         <a href="singleres.php?'+value.ad_hotel_id+'"><b>'+value.hotel_name+'</b></a> <br />'+value.text;
                        html+= '      </div>';
                        html+= '</div>';
                    });
                    
                    $("#sponlist_o").html(html);
                },
                    error: function (response) {
                                   console.log(response);
                               }
                 });
        
		});
</script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="css/jquery.timepicker.addon.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/jquery.timepicker.addon.js"></script>
<script src="js/jquery.slider.js"></script>
<script src="js/jquery.selectbox-0.2.js"></script>
<script type="text/javascript">
$(function () {
	//jQuery.noConflict();
	
	$( "#datepicker" ).datepicker({minDate: 0 });
	$("#datepicker").datepicker("option", "dateFormat","yy-mm-dd");
	
//$("#datepicker").attr('disable',true);
$("#t_hotel").selectbox();
$("#t_memb").selectbox();
$("#t_memb").selectbox('disable');
$("#time").selectbox();
$("#time").selectbox('disable');
$("#food").selectbox();
$("#type").selectbox();
$("#type").selectbox('disable');

$("#cbox").click(function(){
	$(".in_pop").hide();
});

$("#rtable").click(function(){
	$(".in_pop").show();
});


$("#chkout").click(function(e){
	e.preventDefault();
	$valid = true;
	$.each(this.form, function () {
		if(!this.validity.valid)
			$valid=false;

	});
	if($valid)
		$.ajax({
	        url: "http://burpbig.com/admin/API/index.php",
	        type: "POST",
	        dataType: 'JSON',
	        data: $("#bookingForm").serialize() + {type : "session_booking"},
	        success: function (response) {
	        }
		});
	//$(".ck_pop").show();
});

$("#ebox").click(function(){
	$(".ck_pop").hide();
});

$("select#food").on('change', function () {

	$("#datepicker").val("");
	$("#t_memb").html("");
    //$("#t_memb").selectbox('detach');
});



		$("#datepicker").datepicker('option','onSelect',function () {

			
			hotel_id = $(this).data('hotel');
			dinning_id = $("select#food").val();
			selected_date = $(this).val();
			$.ajax({
		        url: "http://burpbig.com/admin/API/index.php",
		        type: "POST",
		        dataType: 'JSON',
		        data: {type:'quota', hotel:hotel_id , dinning: dinning_id, date:selected_date},
		        success: function (response) {
		            console.log(response);
		            //alert(response.quota);
		            //console.log('city_id'+$.cookie('city_id'));
		          optionLength = response.quota > 10?10:response.quota;
		           $("#t_memb").html("");
		           $("#t_memb").selectbox('detach');
		           for(i=1;i<=optionLength;i++)
		           {
		               $("#t_memb").append("<option value='"+i+"'>"+i+"</option>");
		           }
		           $("#t_memb").selectbox('attach',{ onChange : function (){
				        	hotel_id = $(this).data('hotel');
				   			dinning_id = $("select#food").val();
				   			$.ajax({
						        url: "http://burpbig.com/admin/API/index.php",
						        type: "POST",
						        dataType: 'JSON',
						        data: {type:'timmings', hotel:hotel_id , dinning: dinning_id},
						        success: function (response) {
						            console.log(response);
						            $("#avail_hours").css("color","green").html("Avl. ("+response.start+"00 hrs to "+response.end+"00 hrs)");
						            var startDateTextBox = $('#timepickerStart');
						        	var endDateTextBox = $('#timepickerEnd');
						        	$("#type").selectbox('enable');
						        	$.timepicker.timeRange(
						        		startDateTextBox,
						        		endDateTextBox,
						        		{
						        			//minInterval: (1000*60*60), 
						        			maxInterval: (1000*60*90),// 1.5 hr
						        			 
						        			start: {
						        					hourMin: parseInt(response.start),
						        					hourMax: parseInt(response.end)
						        					}, // start picker options
						        			end: {
						        					hourMin: parseInt(response.start),
						        					hourMax: parseInt(response.end)
						        				} // end picker options
						        		}
						        	);
						        }
				   			});
				   			
								
				           }
		           });
		           
		           // $("#sponlist_o").html(html);
		        },
		            error: function (response) {
		                           console.log(response);
		                       }
		         });

			});
		
	

});
</script>

<?php include_once('footer.php')?>
