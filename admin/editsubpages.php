<?php
ob_start();
session_start();
include("connection.php") ;
include("fckeditor/fckeditor.php") ;

if ( isset( $_POST['Submit'] ) )
{
	$pageid=$_REQUEST['pageid'];
	$pagename=$_REQUEST['pagename'];
	$metatitle=$_REQUEST['metatitle'];
	$metakeyword=$_REQUEST['metakeyword'];
	$metadesc=$_REQUEST['metadesc'];
	$content=$_REQUEST['FCKeditor1'];
 
 	$sql="update pagetable set pagename='$pagename',metatitle='$metatitle',metakeyword='$metakeyword',metadesc='$metadesc',content='$content' where pageid=$pageid";
	
	mysql_query($sql);
	header("location:".$_SERVER['HTTP_REFERER']);
	exit;
}

	$editid=$_REQUEST['pid'];//
	$sql=mysql_fetch_array(mysql_query("select * from pagetable where pageid='$editid' and deleteflag='N'"));
	$pageid=$sql['pageid'];
	$pagename=$sql['pagename'];
	$metatitle=$sql['metatitle'];
	$metakeyword=$sql['metakeyword'];
	$metadesc=$sql['metadesc'];
	$content=$sql['content'];

?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit CMS</title>

<link href="../style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../styles.css" type="text/css"/>
<link rel="stylesheet" href="admincss/cmsstyle.css" type="text/css"/>
</head>

<body>
<?php
include("adminheader.php");
?>

<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">Dashboard-Edit CMS</a></h1>
		</div>
		<!-- End Logo + Top Nav -->
		</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
			<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Edit Pages</h2>
					</div>

      <form action="" method="post" onSubmit="return ValidateForm(this);">
						
						<!-- Form -->
	<div class="form">
	<p>
		<label>Page Name <span>(Required Field)</span></label>
		<input type="text" name="pagename" class="field size1" value="<?php echo $pagename;?>" />
	</p>
    
    <p>
		<label>Meta Title </label>
		<input type="text" name="metatitle" class="field size1" value="<?php echo $metatitle;?>" />
	</p>
    
    <p>
		<label>Meta Keywords</label>
		<input type="text" name="metakeyword" class="field size1" value="<?php echo $metakeyword;?>" />
	</p>
                                	
	<p>
		<label>Meta Description </label>
		<input type="text" name="metadesc" class="field size1" value="<?php echo $metadesc;?>" />
	</p>						
  	<p>
		<label>Upload images </label>
		<input type="file" name="file" class="field size1" value="<?php echo $imagename;?>" />
	</p> 
   <p>
   <label>Content<span>(Required Field)</span></label></p>
<?php
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = substr( $sBasePath, 0, strpos( $sBasePath, "_samples" ) ) ;

$oFCKeditor = new FCKeditor('FCKeditor1') ;
//$oFCKeditor->BasePath	= $sBasePath ;
$oFCKeditor->BasePath = 'fckeditor/' ;
$oFCKeditor->Value		= $content ;
$oFCKeditor->width = '200px';
$oFCKeditor->height = '200px';

$oFCKeditor->Create() ;
?>
	</div>
						<!-- End Form -->
					<input type="hidden" name="pageid" value="<?php echo $pageid;?>">	
						<!-- Form Buttons -->
						<div class="buttons">
							<input type="hidden" name="pageid" value="<?php echo $pageid;?>"><input type="submit" name="Submit" value="Submit">
						</div>
						<!-- End Form Buttons -->
					</form>
				</div>
				<!-- End Box -->
				
					</div>
			<!-- End Content -->
			
  		<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<?php include("adminfooter.php");?>
</body>
</html>