<?php include_once('header.php')?>
<?php include_once('page_banner.php')?>
<style type="text/css">
.clear{clear:both;}
.form{width:600px; margin:0 auto; background-color:#efefef; padding: 15px;}
.outer_frm{width:100%;}
.fields{width:100%; margin-bottom: 15px;}
.text{  width: 39%;
  float: left;
  /* background-color: red; */
  padding: 5px;
  color: #5C5050;
  font-weight: bold;
  font-family: arial;
  font-size: 16px;}
.input{  width: 56%;
  float: right;
  /* background-color: blue; */
  padding: 5px;
  color: #857575;
  font-weight: 400;
  font-family: arial;
  font-size: 14px;}
input.input_field {width: 100%; padding: 8px;}
textarea.input_field {
  width: 100%;
}
.icon{width:10px; background-color:red;}
input.btn {
  float: right;
  background-color:rgb(204, 98, 98);
  padding: 6px 12px;
  border: none;
  color: #fff;
  font-weight: 800;
  font-size: 16px;
  font-family: arial;
}
.icon {
  width: 10px;
  background-color: rgb(204, 98, 98);
  margin-right: 8px;
    padding: 5px;
}
</style>
<section class="list_sec mt">
    <div class="wrapper">
<div class="form">
<form>
<div class="outer_frm">
<div class="fields">
<label class="text">NAME OF THE HOTEL<sup>*</sup></label>
<div class="input">
<input type="text" name="name" class="input_field" >
</div>
<div class="clear"></div>
</div>

<div class="fields">
<label class="text">RESTAURANT/CAFE<sup>*</sup></label>
<div class="input">
<input type="text" name="name" class="input_field" >
</div>
<div class="clear"></div>
</div>

<div class="fields">
<label class="text">ADDRESS<sup>*</sup></label>
<div class="input">
<textarea  name="add" class="input_field" rows="4" column="4" ></textarea>
</div>
<div class="clear"></div>
</div>


<div class="fields">
<label class="text">SECTOR</label>
<div class="input">
<input type="text" name="name" class="input_field" >
</div>
<div class="clear"></div>
</div>


<div class="fields">
<label class="text txt_lg">BOOKING RESERVATION NO<sup>*</sup></label>
<div class="input inpt_lg">
<input type="text" name="name" class="input_field" >
</div>
<div class="clear"></div>
</div>


<div class="fields">
<label class="text">CUISINS</label>
<div class="input">
<input type="radio" name="cuisins" value="indian" checked>Indian
<input type="radio" name="cusins" value="southindian">South Indian
</div>
<div class="clear"></div>
</div>

<div class="fields">
<label class="text">CUISINS</label>
<div class="input">
<input type="radio" name="cuisins" value="veg" checked>Veg
<input type="radio" name="cusins" value="nonveg">Non Veg
</div>
<div class="clear"></div>
</div>

<div class="fields">
<label class="text">ALCOHAL</label>
<div class="input">
<input type="radio" name="cuisins" value="yes" checked>Yes
<input type="radio" name="cusins" value="no">No
</div>
<div class="clear"></div>
</div>


<div class="fields">
<label class="text">SITINGS</label>
<div class="input">
<span class="icon">iii</span>Dining<br>
<span class="icon">iii</span>Openair/Roof<br>
<span class="icon">iii</span>Outdoor<br>
<span class="icon">iii</span>Loung
</div>
<div class="clear"></div>
</div>


<div class="fields">
<input type="submit" name="button" class="btn" value="Next Step">
</div>
<div class="clear"></div>
</div>
</form>
</div>
</div>
</section>

<?php include_once('footer.php')?>