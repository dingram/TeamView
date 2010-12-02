<htm>
  <head>
	  <title>TeamView</title>
    <link rel="stylesheet" type="text/css" href="TeamView.css" />
  </head>
  <body>
    
    <div id="HeaderDiv">
    	
    	<?php echo file_get_contents( "Header.shtml" ); ?>
    	
    </div>
    
    <div id="TreeDiv">
    	
    	<?php echo file_get_contents( "RefTree.shtml" ); ?>
    	
    </div>
    
    <div id="SidebarDiv">
    	
    	<?php echo file_get_contents( "Sidebar.shtml" ); ?>
    	
    </div>
    
  </body>
</html>