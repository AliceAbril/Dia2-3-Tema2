<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> JavaScrip Mobile Page </title>
        
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"> </script>
        <script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
        
    </head>
    <body>
        <div data-role="page">  
        
            <div data-role="header">
                
                <a id="return-point"></a> 
                
		<h4> Start Page </h4>
                
            </div><!-- /header -->
            
            <br/><br/>

            <div data-role="content">
                
                <!-- 7.Add three pages and a menu to navigate between them -->
                
                Menu:
                <ul>
                    <li> <a href="Page1.php#anchorPage1" target="_self"> Page 1 </a> </li>
                    <li> <a href="Page2.php#anchorPage2" target="_self"> Page 2 </a> </li>
                    <li> <a href="Page3.php#anchorPage3" target="_self"> Page 3 </a> </li>
                </ul>
                
            </div><!-- /content -->
        
        </div>
    </body>
</html>
