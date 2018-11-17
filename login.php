
<?php
require_once('includes/config.php');
if(isset($_POST['login']))
{
	header("Location: exam1.php?id=1 && A=0 && B=0 && C=0 &&D=0");
	
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nidan technologies pvt ltd.</title>
<meta name="keywords" content="extreme, services, css templates, website templates, web design" />
<meta name="description" content="Extreme is a free website template that can be used for any purpose" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>
<body>
<div id="templatemo_header_wrapper">
	<div id="templatemo_header">

		<div id="site_title">
            <h1><a href="index.php">
                <strong>Test Stimulator</strong>
                <span>Do practice and get Excellent Result</span>     
            </a></h1>
        </div>
        
        <!--<div id="templatemo_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html" class="current">Services</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>    	
    	</div> <!-- end of templatemo_menu -->-->
        
        <div class="cleaner"></div>
	</div> <!-- end of header -->
</div> <!-- end of header_wrapper -->

<!-- start of content_wrapper -->
<div id="templatemo_content_wrapper">
	<!-- start of content -->
	<div id="templatemo_content"> 
    	
        
<!--********************************** WORK ************************************-->        
      
      <table  width="60%"  align="center" height="200px" style="background-color:#333" >
      <form action="" method="post" enctype="multipart/form-data">
      
      
      <tr>
      <td>&nbsp;  </td>
      </tr>
      
      <tr>
      <td style="color:#FFF; font-family:'Courier New'; font-size:16px; font-weight:bold" align="center"> User Name :      </td>
      <td>
      		<input name="user_name" type="text" />
      </td>
      </tr>
      
      <tr>
      <td style="color:#FFF; font-family:'Courier New'; font-size:16px; font-weight:bold" align="center"> Password :
      </td>
      <td>
            <input name="password" type="text" />
      </td>
      </tr>
      
      <tr>
      <td align="center" colspan="2">
            <input name="login" type="submit" value="LOGIN" style="background-image: url(images/templatemo_button.png);color:#FFF; font-family:'Courier New'; font-size:16px; font-weight:bold " />
      </td>
      </tr>
      
      <tr>
      <td style="color:#FFF; font-family:'Times New Roman'; font-size:14px" align="center">
      		<a href="forget_password.php" style="color:#FFF" > Forget Password </a>
      </td>
      <td style="color:#FFF; font-family:'Times New Roman'; font-size:14px" align="center">
      		<a href="user_reg.php" style="color:#FFF" > New Regrestration </a>
      </td>
      </tr>
      
      
      </form>
      </table>
      
        
        
<!--********************************** END WORK ************************************-->        
        
        	
	</div> <!-- end of content -->
</div> <!-- end of content_wrapper -->

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    
    	<div class="footer_box">
        
        	<h3>Partners</h3>
        
            <ul class="footer_menu">
                <li><a href="http://www.templatemo.com/page/1" target="_parent">Free CSS Templates</a></li> 
                <li><a href="http://www.flashmo.com/page/1" target="_parent">Free Flash Templates</a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                <li><a href="http://www.koflash.com">Best Flash Gallery</a></li>               
            </ul>

        </div>
        
       <!-- <div class="footer_box">
        
            <div class="footer_menu">
            
                <h3>Navigation</h3>
    
                <ul class="footer_menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                
            </div>
		</div>-->
        
        <div class="footer_box">
        
            <div class="footer_menu">
            
              <h3>About Us</h3>
    			
                <img src="images/templatemo_image_04.jpg" alt="about us" />
                <p>Nullam ultrices tempor nisi, ac egestas diam aliquam  mattis adipiscing imperdiet.</p>
                
                <div class="button"><a href="#">Read More</a></div>
                
            </div>
            
        </div>
	
    	<div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer wrapper -->    

<div id="templatemo_copyright_wrapper">
	<div id="templatemo_copyright">
    
		Copyright © 2018 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
    </div> 
<div style="text-align: center; font-size: 0.75em;">Design Downloaded from <a href="http://www.template4all.com/">free CSS templates</a> | <a href="http://www.freethemes4all.com/">free website templates</a> | <a href="http://www.seodesign.us/" title="free wallpapers hd" target="_blank">Free Wallpapers HD</a>.</div>

<!-- end of templatemo_copyright -->
</div> <!-- end of copyright wrapper -->
</body>
</html>