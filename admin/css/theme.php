<? $themes = '';
$themes = 'blue';
 ?>

<style type="text/css">

/* -------------------- Logo -------------------- */

#header-main #logo { 
	background: url(images/themes/<?=$themes;?>/logo.gif) no-repeat left 10px; 
	width: 100%; 
	height: 70px; 
	}



	
/* -------------------- Header background -------------------- */
	
#header-main { 
	background: #005195 url(images/themes/<?=$themes;?>/header-bg.jpg) repeat-x top left; 
	}




/* -------------------- Tabs -------------------- */

ul#nav li {
	background:transparent url(images/themes/<?=$themes;?>/tab-left.gif) no-repeat scroll left top;
	float:left;
	margin:0 5px 0 0;
	padding:0 0 0 9px;
	}

ul#nav li a, ul#nav li a:visited {
	background:transparent url(images/themes/<?=$themes;?>/tab-right.gif) no-repeat scroll right top;
	color:#FFFFFF;
	display:block;
	float:left;
	padding:7px 15px 6px 6px;
	text-decoration:none;
	}
	
ul#nav li a:hover {
	padding:8px 15px 5px 6px;
	}

ul#nav li#current { /* give the id="current" to the currently selected tab */
	background:transparent url(images/themes/<?=$themes;?>/tab-active-left.gif) no-repeat scroll left top;
	}

ul#nav li#current a {
	background:transparent url(images/themes/<?=$themes;?>/tab-active-right.gif) no-repeat scroll right top;
	color:#444444;
	}
    
    </style>