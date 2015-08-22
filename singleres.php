<?php
include_once('header.php');
//include_once '../admin/include/Connection.class.php';
include_once '../admin/API/Restaurant.class.php';
$hotel_id = isset($_GET['hotel_id']) ? $_GET['hotel_id'] : "";
$url = 'http://burpbig.com';
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
<?php include_once('search.php') ?>
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
                                    center: new google.maps.LatLng(51.508742, -0.120850),
                                    zoom: 5,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
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
                                <span id="cbox">Cancel</span>
                            </div>





                            <div class="stm">
                                <label>Select date</label>
                                <input name="date" type="text" class="dt_sel" id="datepicker" data-hotel="<?= $hotel_id; ?>" placeholder="Please select date here" required>
                            </div>
                            <div class="stm">
                                <label>Type</label>
                                <select name="type" id="type" tabindex="1" required="true" data-hotel="<?= $hotel_id; ?>">
                                    <!--                                    <option value="Buffet">Alacarte</option>
                                                                        <option value="Lunch">Buffet</option>-->
                                </select>
                            </div>
                            <div class="stm">
                                <label>Food</label>
                                <select name="food" id="food"  tabindex="1" data-hotel="<?= $hotel_id; ?>" required>

                                </select>
                            </div>


                            <div class="stm">
                                <label>Select total member</label>
                                <select name="t_memb" id="t_memb" tabindex="1" data-hotel="<?= $hotel_id; ?>" required>
                                    <?php
                                    for ($member = 1; $member <= 10; $member++) {
                                        ?>
                                        <option value="<?= $member; ?>"><?= $member; ?></option>
                                    <?php } ?>
                                </select>
                            </div>



                            <div class="stm">
                                <label>Time Range <span style="color:red" id="avail_hours">Avl. ()</span></label>
                                <!-- <input name="star_time" type="text" placeholder="Start Time" id="timepickerStart" class="dt_sel dt_sel_half" required> -->
                                <span style="width:40%">
                                <select name="star_time" id="timepickerStart" tabindex="1" class="dt_sel dt_sel_half" required>
                                    
                                </select>
                                </span>


                                <label style="float: left; width: 3%; margin-left: 6px;">To</label>
                                <span style="width:40%">
                                <!-- <input name="end_time" type="text" placeholder="End Time" id="timepickerEnd" class="dt_sel dt_sel_half" required> -->
                                <select name="end_time" id="timepickerEnd" tabindex="1" class="dt_sel dt_sel_half" required>
                                    
                                </select>
                                </span>
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
            <form method="POST" action="./checkout.php" accept-charset="UTF-8" id="payment">
            
                <div class="flds_o">
                    <div class="hide_list">
                        <span id="ebox" class="eicon"></span>
                    </div>

                    <div class="stm_full">
                        <div class="chk_detail">Thank you for booking your table with us, you have booked a table
                         <b class="c-type"><?php echo "buffet" ?> </b>
                            for
                            <b class="c-members"><?php echo "4 members" ?></b>
                            on
                            <b class="c-date"><?php echo "6-7-2014,lunch" ?></b> 
                            timing 
                            <b class="c-timing"><?php echo "3pm -4pm" ?> </b>
                            at
                            <b class="c-hotel-name"><?php echo "Hotel name" ?></b>.
                            With your special order of 
                            <b class="c-others"><?php echo "sample text" ?></b>
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
                    <input type="submit" name="checkout" class="pbbt" id="sub" value="Proceed to payment" />
                </div>
                </form>

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
    <?php //for($i=1 ; $i<=4 ; $i++) {  ?>
                                            <div class="spos_ads">
                                                    <img src="img/food.jpg" class="ad_img"/>
                                                    <div class="ad_txt">
                                                            lorem ipsum Simpli a dummy text
                                                    </div>
                                            </div>
    <?php //}  ?>
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
                            $(document).ready(function () {
                                //$(location).attr('search').substring(1)
                                $.ajax({
                                    url: "http://burpbig.com/admin/API/index.php",
                                    type: "POST",
                                    dataType: 'JSON',
                                    data: {type: 'get_single_rest', hotel_id: '<?php echo $hotel_id ?>' },
                                    success: function (response) {
                                        console.log(response);
                                        $('.text1').text(response.hotel_name);
                                        $('.connum').text(response.main_phone);
                                        for (i = 0; i < response.cuisines.length; i++) {
                                            $('#cuisines').append('<span class="lfttxt">' + response.cuisines[i].name + '</span> <br>');
                                        }
                                        $('#opening_hours').append('<span class="lfttxt">Today (' + response.opening_time + ' to ' + response.closing_time + ') <a href="#" class="link_bt_sm" style="color: white;">Open</a></span>');
                                        for (i = 0; i < response.available.length; i++)
                                            $('#available_ul').append('<li><span class=""></span>' + response.available[i] + '</li>');
                                        for (i = 0; i < response.not_available.length; i++)
                                            $('#not_available_ul').append('<li><span class=""></span>' + response.not_available[i] + '</li>');
                                        $('#visitor_attraction').text(response.visitor_attraction);
                                        $('#value_for_2').append('<span class="lfttxt">$' + response.value_for_2 + '</span> <br>');
                                        $('#address').append('<span class="lfttxt">' + response.address + '</span> <br>')
                                        if (response.cover_pic !== '')
                                            $('.hotel_img').css('background-image', 'url(' + response.cover_pic + ')');


                                        for (i = 0; i < response.menu.Ala_Carte.length; i++)
                                            $('#alacarte_links').append('<a href="' + response.menu.Ala_Carte[i].image_path + '" data-gallery style="display: none;" ><img src="' + response.menu.Ala_Carte[i].image_path + '" style="display: none;"/></a>');
                                        for (i = 0; i < response.menu.Buffet.length; i++)
                                            $('#buffet_links').append('<a href="' + response.menu.Buffet[i].image_path + '" data-gallery style="display: none;" ><img src="' + response.menu.Buffet[i].image_path + '" style="display: none;"/></a>');
                                        for (i = 0; i < response.menu.Bar.length; i++)
                                            $('#barmenu_links').append('<a href="' + response.menu.Bar[i].image_path + '" data-gallery style="display: none;" ><img src="' + response.menu.Bar[i].image_path + '" style="display: none;"/></a>');
                                        for (i = 0; i < response.Banquet.length; i++)
                                            $('#banquits_links').append('<a href="' + response.Banquet[i].image_path + '" data-gallery style="display: none;" ><img src="' + response.Banquet[i].image_path + '" style="display: none;"/></a>');
                                        for (i = 0; i < response.Gallery.length; i++)
                                            $('#gallery_links').append('<a href="' + response.Gallery[i].image_path + '" data-gallery style="display: none;" ><img src="' + response.Gallery[i].image_path + '" style="display: none;"/></a>');


                                        if (response.menu.Ala_Carte.length == 0)
                                            $("#alacarte").addClass("not_avl");
                                        if (response.menu.Buffet.length == 0)
                                            $("#buffet").addClass("not_avl");
                                        if (response.menu.Bar.length == 0)
                                            $("#barmenu").addClass("not_avl");
                                        if (response.Banquet.length == 0)
                                            $("#banquits").addClass("not_avl");
                                        if (response.Gallery.length == 0)
                                            $("#gallery").addClass("not_avl");
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
                                    data: {type: 'sponsored_ads', city_id: $.cookie('city_id')},
                                    success: function (response) {
                                        console.log(response);
                                        //console.log('city_id'+$.cookie('city_id'));
                                        var html = "";
                                        html = '';
                                        $.each(response.ads, function (key, value) {
                                            console.log(value);
                                            html += '<div class="spos_ads">';
                                            html += '      <img src="' + value.ad_cover_pic + '" class="ad_img"/>';
                                            html += '      <div class="ad_txt">';
                                            html += '         <a href="singleres.php?' + value.ad_hotel_id + '"><b>' + value.hotel_name + '</b></a> <br />' + value.text;
                                            html += '      </div>';
                                            html += '</div>';
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

                                $("#datepicker").datepicker({minDate: 0});
                                $("#datepicker").datepicker("option", "dateFormat", "yy-mm-dd");

                                $("#t_hotel").selectbox();
                                $("#t_memb").selectbox();
//                            $("#t_memb").selectbox('disable');

                                $("#time").timepicker();
                                $("#timepickerStart").selectbox();
                                $("#timepickerEnd").selectbox();
//                            $("#time").selectbox('disable');
                                $("#food").selectbox();
                                $("#type").selectbox();
//                            $("#type").selectbox('disable');

                                $("#cbox").click(function () {
                                    $(".in_pop").hide();
                                });
                                $("#ebox").click(function () {
                                    $(".ck_pop").hide();
                                });

                                $("#rtable").click(function () {
                                    $(".in_pop").show();
                                });
                                $("#datepicker").datepicker('option', 'onSelect', function () {

                                    hotel_id = $(this).data('hotel');
                                    selected_date = $(this).val();
                                    $.ajax({
                                        url: "http://burpbig.com/admin/API/index.php",
                                        type: "POST",
                                        dataType: 'JSON',
                                        data: {type: 'menu_type', hotel_id: hotel_id},
                                        success: function (response) {
                                            var menu_type = response.menu_type.hotel_field_val;
                                            var menu_type_array = menu_type.split(',');
                                            $("select#type").html("");
                                            $("select#type").selectbox('detach');
                                            $("select#type").append('<option value="">Select</option>');
                                            $.each(menu_type_array, function (k, v) {
                                                if (v == 'Buffet') {
                                                    var key = '2';
                                                }
                                                else if (v == 'alacarte') {
                                                    key = '1';
                                                }
                                                $("select#type").append('<option value="' + key + '">' + v + '</option>');
                                            });
                                            $("select#type").selectbox();
                                        }
                                    });

                                });
                                $("select#type").on('change', function () {
                                    hotel_id = $(this).data('hotel');
                                    selected_date = $('input#datepicker').val();
                                    type_id = $(this).val();
                                    $.ajax({
                                        url: "http://burpbig.com/admin/API/index.php",
                                        type: "POST",
                                        dataType: 'JSON',
                                        data: {type: 'food_type', hotel_id: hotel_id, type_id: type_id, selected_date:selected_date},
                                        success: function (response) {
                                            console.log(response);
                                            var food_type = response.food_type.food_type;
                                            $("select#food").html("");
                                            $("select#food").selectbox('detach');
                                            $("select#food").append('<option value="">Select</option>');
                                            $.each(food_type, function (k, v) {
                                                if (k == 'breakfast') {
                                                    var key = '1';
                                                }
                                                else if (k == 'lunch') {
                                                    key = '2';
                                                }
                                                else if (k == 'dinner') {
                                                    key = '3';
                                                }
                                                if (v == '0') {
                                                    
                                                }
                                                else {
                                                    $("select#food").append('<option value="' + key + '">' + k + '</option>');
                                                }
                                            });
                                            $("select#food").selectbox();
                                        }
                                    });
                                });

                                 $("select#food").on('change', function () {
                                    hotel_id = $(this).data('hotel');
                                    selected_date = $('input#datepicker').val();
                                    type_id = $("select#type").val();
                                    food_id = $(this).val();
                                    $.ajax({
                                        url: "http://burpbig.com/admin/API/index.php",
                                        type: "POST",
                                        dataType: 'JSON',
                                        data: {type: 'get_time_and_members', hotel_id: hotel_id, food_id: food_id, selected_date:selected_date},
                                        success: function (response) {
                                            if(response.avail.seats >= '10'){
                                                seats = 8;
                                            }
                                            else{
                                                seats = response.seats;
                                            }
                                            $("select#t_memb").html("");
                                            $("select#t_memb").selectbox('detach');
                                            $("select#t_memb").append('<option value="">Select</option>');
                                            for(seat = 1; seat<=seats; seat++){
                                                $("select#t_memb").append('<option value="' + seat + '">' + seat + '</option>');
                                            }
                                           $("select#t_memb").selectbox();
                                           $("#timepickerStart").html("");
                                           $("#timepickerEnd").html("");
                                           
                                           $("#timepickerStart").selectbox('detach');
                                           $("#timepickerEnd").selectbox('detach');
                                           console.log(response.data);
                                           $.each(response.data, function (k, v) {
                                            console.log(k + ' ' + v);
                                            $("#timepickerStart").append('<option value="' + v + '">' + v + '</option>');
                                            $("#timepickerEnd").append('<option value="' + v + '">' + v + '</option>');

                                           });
                                           $("#timepickerStart").selectbox();
                                           $("#timepickerEnd").selectbox();


                                           // $('#timepickerStart').val(response.avail.opening_time);
                                           // $('#timepickerEnd').val(response.avail.closing_time);
                                          
                                        }
                                    });
                                });    
                                $("#chkout").click(function (e) {
                                    e.preventDefault();
                                    $valid = true;
                                    $.each(this.form, function () {
                                        if (!this.validity.valid)
                                            $valid = false;

                                    });
                                    //var form_data = $("#bookingForm").serialize();
                                    var date = $('#datepicker').val();
                                    var type = $('#type').val();
                                    var food = $('#food').val();
                                    var t_memb = $('#t_memb').val();
                                    var timepickerStart = $('#timepickerStart').val();
                                    var timepickerEnd = $('#timepickerEnd').val();
                                    var txtarea_box = $('.txtarea_box').val();
                                    

                                    
                                    if ($valid)
                                        $.ajax({
                                            
                                            url: "http://burpbig.com/admin/API/index.php",
                                            type: "POST",
                                            dataType: 'JSON',
                                            data: {type: 'session_booking', date: date, f_type: type, food: food, t_memb: t_memb, timepickerStart:timepickerStart, timepickerEnd:timepickerEnd, txtarea_box:txtarea_box  },
                                            success: function (response) {
                                                if(response.booking_data.type == 1){
                                                    type = 'alacarte';
                                                }
                                                else if(response.booking_data.type == 2){
                                                    type = 'buffet';
                                                }
                                                if(response.booking_data.food == 1){
                                                    food = 'Breakfast';
                                                }
                                                else if(response.booking_data.food == 2){
                                                    food = 'Lunch';
                                                }
                                                else if(response.booking_data.food == 3){
                                                    food = 'Dinner';
                                                }
                                                $(".ck_pop").show();
                                                $('.c-type').html(type);
                                                $('.c-members').html(response.booking_data.t_memb+' Members');
                                                $('.c-date').html(response.booking_data.date+', '+food);
                                                $('.c-timing').html(response.booking_data.star_time+', '+response.booking_data.end_time);
                                                $('.c-hotel-name').html('test');
                                                $('.c-others').html(response.booking_data.others);
                                                
                                            }
                                        });
                                    //$(".ck_pop").show();
                                });


                            });
</script>

<?php include_once('footer.php') ?>
