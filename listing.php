<section class="list_sec">
    <div class="wrapper col-md-12">
        <div class="col-md-6 fleft">
        	<h3 class="listhd">Quick Searches</h3>
            <div class="listingarea" id="quick_searches_div">
      
            </div>
        </div>
        <div class="col-md-6 fleft">
        	<h3 class="listhd">Trending</h3>
            <div class="listingarea" id="trending_div">
            
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
                   
                    for(i=0; i< response.fixed.length; i++){
                        var dynamicHtml = '';
                        dynamicHtml += '<div class="col-md-6 fright">';
                        dynamicHtml += '<div class="snglst">';
                        dynamicHtml += '<a href="reslist.php" class="link_s">';
                        dynamicHtml += '<span class="prolstimg">';
                        dynamicHtml +='<img src="img/'+(i+1)+'.png"/>';
                         dynamicHtml += '</span>';
                         dynamicHtml += '<span class="prolstname">'+response.fixed[i].name +'</span>';
                         dynamicHtml += '</a> </div> </div>'; 

                         $("#quick_searches_div").append(dynamicHtml);   
                    }
                     for(i=0; i< response.random.length; i++){
                        var dynamicHtml = '';
                        dynamicHtml += '<div class="col-md-6 fright">';
                        dynamicHtml += '<div class="snglst">';
                        dynamicHtml += '<a href="reslist.php" class="link_s">';
                        dynamicHtml += '<span class="prolstimg">';
                        dynamicHtml +='<img src="img/8.png"/>';
                         dynamicHtml += '</span>';
                         dynamicHtml += '<span class="prolstname">'+response.random[i].name +'</span>';
                         dynamicHtml += '</a> </div> </div>'; 

                         $("#quick_searches_div").append(dynamicHtml);   
                    }
                },
                error: function (response) {
                    console.log(response);
                }
              });
    });
</script>
