<?php 
include_once '../admin/include/Connection.class.php';
include_once '../admin/include/User.class.php';
SESSION_START();
$user = new User();
?>
<!doctype html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,600,600italic,700,400italic,700italic' rel='stylesheet' type='text/css'>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Burp Big</title>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/jquery.auto-complete.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="css/bootstrap-image-gallery.css">

<!--script type="text/javascript" src="js/jquery-1.11.3.js"></script-->
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery.dropdown.js"></script>
<script src="js/jquery.auto-complete.min.js"></script>
<script src="//rawgithub.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
<!--<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.selectbox-0.2.js"></script>-->

<div id="fb-root"></div>
<script>
  logInWithFacebook = function() {
    FB.login(function(response) {
      if (response.authResponse) {
        
        window.location.href="/new/fbloginhelper.php";
        // Now you can redirect the user or do an AJAX request to
        // a PHP script that grabs the signed request from the cookie.
      } else {
        alert('User cancelled login or did not fully authorize.');
      }
    });
    return false;
  };

  window.fbAsyncInit = function() {
	  FB.init({
		  appId: '841820189220696',
	    cookie     : true,  // enable cookies to allow the server to access 
	                        // the session
	    xfbml      : true,  // parse social plugins on this page
	    version    : 'v2.2' // use version 2.2
	  });
  };

  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
	<script type="text/javascript">
  
	$(document).ready(function(){
		//$( '#cd-dropdown' ).dropdown();
                function add_cookie(){
                    $.cookie('city_id', $( "input[name='cd-dropdown']" ).val());
                    if($('span > .plc_icon').text() != "" && $('span > .plc_icon').text() != null) {
                        $.cookie('city_name', $('span > .plc_icon').text());
                        $(".text1").text($('span > .plc_icon').text());
                    }
                    setTrendingData($( "input[name='cd-dropdown']" ).val());
                    
                }
  		$.ajax({
                url: "http://burpbig.com/admin/API/index.php",
                type: "POST",
                dataType: 'JSON',
                data: {type: 'get_cities'},
                success: function (response) {
                	var dynamicHtml = '';
                    for(i=0; i< response.cities.length; i++){
                    	if (!($.cookie('city_id') == null || $.cookie('city_id') == '' ) && $.cookie('city_id') == response.cities[i].city_id) {
				             dynamicHtml = '<option value='+response.cities[i].city_id+' class="plc_icon" selected>'+response.cities[i].city_name+'</option>';
				        }else
                           dynamicHtml = '<option value='+response.cities[i].city_id+' class="plc_icon">'+response.cities[i].city_name+'</option>';
                       $("#cd-dropdown").html(dynamicHtml);   
                    }
                    $( '#cd-dropdown' ).dropdown();
                   	if(!$('.cd-active')[0]) {
		        		$('.cd-dropdown ul li').css('top', '0px');
		        	}
                                add_cookie();
                                $.cookie('city_name','Chandigarh');
                            $('.cd-dropdown').on('click', function(){
		        		if(!$('.cd-active')[0]) {   
						add_cookie();
		        		$('.cd-dropdown ul li').css('top', '0px');
		        		}
		        	})
                },
                error: function (response) {
                    console.log(response);
                }
         });
        //console.log($.cookie('city_id'));        
        if (!($.cookie('city_id') == null || $.cookie('city_id') == '')) {
            //console.log("City name: "+$.cookie('city_name'));
            $(".text1").text($.cookie('city_name'));
            setTrendingData($.cookie('city_id'));
        }else{
        	 $(".text1").text('chandigarh');
        	 setTrendingData('1073,4080,4081,4082');   // default chandigarh
        }

		$("#alacarte").click(function(){
			$(".alacarte").show("slow");
		});
		$("#buffet").click(function(){
			$(".buffet").show("slow");
		});
		$("#barmenu").click(function(){
			$(".barmenu").show("slow");
		});
		$("#gallery").click(function(){
			$(".gallery").show("slow");
		});
		$("#banquits").click(function(){
			$(".banquits").show("slow");
		});
		
		
		$("#alacarte").click(function(){
			$(".alacarte").show("slow");
		});
		$("#buffet").click(function(){
			$(".buffet").show("slow");
		});
		$("#barmenu").click(function(){
			$(".barmenu").show("slow");
		});
		$("#gallery").click(function(){
			$(".gallery").show("slow");
		});
		$("#banquits").click(function(){
			$(".banquits").show("slow");
		});
		$("#close1").click(function(){
			$(".alacarte").hide("slow");
		});
		$("#close2").click(function(){
			$(".buffet").hide("slow");
		});
		$("#close3").click(function(){
			$(".barmenu").hide("slow");
		});
		$("#close4").click(function(){
			$(".gallery").hide("slow");
		});
		$("#close5").click(function(){
			$(".banquits").hide("slow");
		});
               
                    $('#ms-emails').autoComplete({
                            minChars: 0,
                            source: function(term, suggest){
                                $.getJSON('search_json.php', { q: term }, function(choices){ 
                                    //console.log(choices);
                                    var suggestions = [];
                                    for (i=0;i<choices.length;i++)
                                        if (~(choices[i][0]+' '+choices[i][1]).toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                                    suggest(suggestions);                                
                                });
                            },
                            renderItem: function (item, search){
                            //console.log(item);
                                var re = new RegExp("(" + search.split(' ').join('|') + ")", "gi");
                                var ret;
                                if(item[1] == "") {
                                    class_name = "";
                                    ret = '<div style="cursor: pointer" class="autocomplete-suggestion" data-langname="'+item[0]+'" data-lang="'+item[1]+'" data-val="'+search+'"> '+item[0].replace(re, "<b>$1</b>")+' <span class="'+class_name+'">'+item[1]+'</span><span></span></div>';
                                } else {
                                    ret = '<div style="cursor: pointer" class="autocomplete-suggestion" data-langname="'+item[0]+'" data-lang="'+item[1]+'" data-val="'+search+'"> '+item[0].replace(re, "<b>$1</b>")+' <span class="'+class_name+'">'+item[1]+'</span></div>';
                                    class_name = "search_cat";
                                }
                                return ret;
                            },
                            onSelect: function(e, term, item){
                                //alert('Item "'+item.data('langname')+' ('+item.data('lang')+')" selected by '+(e.type == 'keydown' ? 'pressing enter' : 'mouse click')+'.');
                                $('#ms-emails').val(item.data('langname'));
                                location.href = 'reslist.php?s='+item.data('langname');
                            }
                    });

	});

    function setTrendingData(cityId){
	$.ajax({
                url: "http://burpbig.com/admin/API/index.php",
                type: "POST",
                dataType: 'JSON',
                data: {type: 'trending_ads', city_id: cityId},
                success: function (response) {
                	//console.log(response);
                	if (response.log)
                		$("#trending_div").html('');
                    for(i=0; i< response.ads.length; i++){

                    	var dynamicHtml = '';
                        dynamicHtml += '<div class="col-md-6 fright">';
                        dynamicHtml += '<div class="cuisneslst">';
                        dynamicHtml += '<a href="singleres.php?'+response.ads[i].ad_hotel_id+'" class="cuisneslist">';
                        dynamicHtml += '<span class="prolstimg">';
                        dynamicHtml +='<img src="'+response.ads[i].ad_cover_pic+'"/>';
                        dynamicHtml += '</span>';
                        dynamicHtml += '<span class="cuisnesname">'+response.ads[i].hotel_name +'</span>';
                        dynamicHtml += '</a> </div> </div>'; 

						$("#trending_div").append(dynamicHtml);
                    }
                },
                error: function (response) {
                    console.log(response);
                }
         });
    }
    </script>
    <script src="js/jquery.cookie.js"></script>
    <style>
        .search_cat {
            border-radius: 100px; 
            background-color: #C7C6C6; 
            padding: 6px;
            color: whitesmoke;
        }
        
        .autocomplete-suggestion {
            line-height: 40px!important;
            font-size: 1.15em;
        }
        
        .autocomplete-suggestion b{
            color: black;
            font-weight: bold!important;
        }
        .pagination_search {
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="header">
	<div class="logo_outer">
    	<a href="index.php">
        	<img src="img/burpbig-transparent.png" alt="Burp big"/>
        </a>
    </div>
	<div class="sign-in">
		<h4>
		<?
		if($user->is_loggedin()!="")
		{?><a href="/new/logout.php">Logout</a>
		<? 

		}else{
		
		?>
        
       <!--  <fb:login-button scope="public_profile,email" onlogin="logInWithFacebook();"></fb:login-button> -->
        <a href="#" id="signinpop" class="sign_bt">Sign In</a>
		<!--href="/new/sign-in.php"-->
		<? } ?>
		
		
		
		</h4>
	</div>
	<div class="city_drop">
        <select id="cd-dropdown" class="cd-select">
        <option value="-1" class="plc_icon" selected>Select location</option>
       
        </select>
    </div>
    
   
    
    <script>
    	$("#signinpop").click(function(){
			$(".signin_pop").show();
		});
		
    </script>
    
<div class="signin_pop">
    <form method="post">
        <h2>Sign in. <span class="hpbt">X<lable>Hide</lable></span></h2>
        <?php
        if(isset($error))
        {
        ?>
        <div class="alert alert-danger">
        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
        </div>
        <?php
        }
        ?>
        <div class="form-group fst">
        	<input type="text" class="form-control" name="txt_uname_email" placeholder="Username or E mail ID" required />
        </div>
        <div class="form-group">
        	<input type="password" class="form-control" name="txt_password" placeholder="Your Password" required />
        </div>
        <div class="clearfix"></div>
        <div class="form-group">
        	<button type="submit" name="btn-login" class="btn btn-block btn-primary">
        	<i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
        	</button>
        </div>
        <label>Don't have account yet ! <a href="sign-up.php">Sign Up</a></label>
        <div class="lwfb">
       <!--  <fb:login-button scope="public_profile,email" onlogin="logInWithFacebook();"></fb:login-button> -->
        </div>
        
        <label>Forgot Password? <a href="forgotPassword.php">Click Here</a></label>
    </form>
    <script>

		$(".hpbt").click(function(){
			$(".signin_pop").hide();
		});
    </script>
</div>
</div>
