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
    margin-bottom: 6px;
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
.icon {
  width: 10px;
  background-color: rgb(204, 98, 98);
  margin-right: 8px;
  padding: 5px;
}
.radio {
  margin-bottom: 8px;}
img {
  margin-left: 30px;
}
span.img {
  margin-left: 6px;}
input.br_btn {
    margin-left: 20px;
  border: none;
  background-color: rgb(204, 98, 98);
  color: #fff;
  font-family: arial;
  padding: 2px;
  font-size: 12px;
}  
.sr_br {
  width: 100%;
  margin-bottom: 15px;
}
label.br_text {
  width: 20%;
  float: left;
  padding: 5px;}
input.br_input {
  width: 55%;
  padding: 4px;
}
input.brw_btn {
  border: none;
  background-color: rgb(204, 98, 98);
  color: #fff;
  font-family: arial;
  padding: 6px;
  font-size: 12px;
}
input.su_btn {
  float: right;
  background-color: rgb(48, 183, 34);
  padding: 6px 20px;
  border: none;
  color: #fff;
  font-weight: 600;
  font-size: 16px;
  font-family: arial;
    margin: 25px 20px;
}
</style>
</head>
<body>
<div class="form">
<form>

<div class="fields">
<label class="text">MENU SELECTION</label>
<div class="input">
<input type="radio" name="selection" value="Alacarte" checked>Alacarte
<input type="radio" name="mselection" value="southindian">South Indian
</div>
<div class="input">
<span class="icon">aa</span>Breakfast<br>
<span class="icon">aa</span>Lunch<br>
<span class="icon">aa</span>Dinner<br>
</div>
<div class="clear"></div>
</div>

<div class="fields">
<label class="text">BANQUET</label>
<div class="input">
<div class="radio">
<input type="radio" name="BANQUET" value="yes" checked>Yes
<input type="radio" name="BANQUET" value="no">No
</div>
<div class="br_input">
<img src="arw.png" width="20px" height="20px" /><span class="img">Image</span><input type="submit" name="" class="br_btn" value="Browse">
</div>
</div>
<div class="clear"></div>
</div>


<div class="fields">
<label class="text">ALL MENU</label>
<div class="input">
<div class="sr_br">
<label class="br_text">Alacarte</label>
<input type="text" name="name" class="br_input" ><input type="submit" name="" class="brw_btn" value="Browse">
</div>
<div class="sr_br">
<label class="br_text">Bar</label>
<input type="text" name="name" class="br_input" ><input type="submit" name="" class="brw_btn" value="Browse">
</div>
<div class="sr_br">
<label class="br_text">Buffet</label>
<input type="text" name="name" class="br_input" ><input type="submit" name="" class="brw_btn" value="Browse">
</div>
<div class="sr_br">
<label class="br_text">Gallery</label>
<input type="text" name="name" class="br_input" ><input type="submit" name="" class="brw_btn" value="Browse">
</div>

</div>
<div class="clear"></div>
</div>


<div class="fields">
<input type="submit" name="button" class="su_btn" value="Submit">
</div>
<div class="clear"></div>
</div>
</form>
</div>

<?php include_once('footer.php')?>