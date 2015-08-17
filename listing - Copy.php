<section class="list_sec">
    <div class="wrapper col-md-12">
        <div class="col-md-6 fleft">
        	<h3 class="listhd">Quick Searches</h3>
            <div class="listingarea">
            	<?php 
                $quickelements = array('','Delivery','BreakFast','Lunch','Dinner','Dinner and NightLife','Cafes','Buffet Places','PickUps','Chinese Restaurants','North Indian');
                for($i=1 ; $i<=10 ; $i++){ ?>


                <?php if($i%2 == 0) {?>
                       <div class="col-md-6 fright">
                        <div class="snglst">
                            <a href="singleres.php" class="link_s">
                            <span class="prolstimg"><img src="img/dish.png"/></span>
                            <span class="prolstname"> <?php echo $quickelements[$i] ?></span>
                            </a>
                        </div>
                    </div>
                    <?php } else { ?>
                       <div class="col-md-6 fright">
                        <div class="snglst">
                            <a href="singleres.php" class="link_s">
                            <span class="prolstimg"><img src="img/dish.png"/></span>
                            <span class="prolstname"> <?php echo $quickelements[$i] ?></span>
                            </a>
                        </div>
                    </div> 
                <?php } } ?>
            </div>
        </div>
        <div class="col-md-6 fleft">
        	<h3 class="listhd">Trending</h3>
            <div class="listingarea">
            	
            </div>
        </div>
    </div>
</section>


<script>

    $(document).ready(function(){
              $.ajax({
                url: "http://burpbig.com/admin/API/index.php",
                type: "POST",
                dataType: 'JSON',
                data: {type: 'quick_search'},
                success: function (response) {
                    console.log(response.fixed);
                    var dynamicHtml = '';
                    for(i=0; i< response.fixed.length; i++){
                        dynamicHtml += '<div class="col-md-6 fright">';
                        dynamicHtml += '<div class="snglst">';
                        dynamicHtml += '<a href="singleres.php" class="link_s">';
                        dynamicHtml += '<span class="prolstimg">';
                        dynamicHtml +='<img src="img/'+(i+1)+'.png"/>';
                        // switch(i+1) {
                        //     case 1:
                        //         dynamicHtml +='<img src="img/1.png"/>';
                        //         break;
                        //      case 2:
                        //         dynamicHtml +='<img src="img/2.png"/>';
                        //         break;
                        //      case 1:
                        //         dynamicHtml +='<img src="img/3.png"/>';
                        //         break;
                        //      case 1:
                        //         dynamicHtml +='<img src="img/4.png"/>';
                        //         break;
                        //      case 1:
                        //         dynamicHtml +='<img src="img/5.png"/>';
                        //         break;              
                        //      default:
                        //         dynamicHtml +='<img src="img/5.png"/>';
                        // }
                         dynamicHtml += '</span>';
                         dynamicHtml += '<span class="prolstname">'+response.fixed[i].name +'</span>';
                         dynamicHtml += '</a> </div> </div>'; 

                         $(".listingarea").append(dynamicHtml);   
                          console.log(dynamicHtml);
                    }
                },
                error: function (response) {
                    console.log(response);
                }
              });
    });
</script>
