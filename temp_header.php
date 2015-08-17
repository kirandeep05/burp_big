<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Burp Big</title>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<!--script type="text/javascript" src="js/jquery-1.11.3.js"></script-->
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery.dropdown.js"></script>
	<script type="text/javascript">
    $( function() {
        $( '#cd-dropdown' ).dropdown();
    });

	$(document).ready(function(){
        	if(!$('.cd-active')[0]) {
        		$('.cd-dropdown ul li').css('top', '0px');
        	}

        	$('.cd-dropdown').on('click', function(){
        		if(!$('.cd-active')[0]) {
        			$('.cd-dropdown ul li').css('top', '0px');
        		}
        	})

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
	});
    </script>
</head>
<body>
<div class="header">
	<div class="logo_outer">
    	<a href="index.php">
        	<img src="img/burpbig-transparent.png" alt="Burp big"/>
        </a>
    </div>
	<div class="city_drop">
        <select id="cd-dropdown" class="cd-select">
        <option value="-1" class="plc_icon" selected>Select location</option>
        <option value="1" class="plc_icon">Chandigarh</option>
        <option value="2" class="plc_icon">Delhi</option>
        <option value="3" class="plc_icon">Amritsar</option>
        <option value="4" class="plc_icon">Uttar pardesh</option>
        </select>
    </div>
</div>
