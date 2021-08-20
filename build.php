<html>
  <head><title>Message</title></head>
  <body>
    
<?php
    
  function execPrint($command) {
    $result = array();
    exec($command, $result);
    print("<pre>");
    foreach ($result as $line) {
        print($line . "\n");
    }
    print("</pre>");
  }
    
  // Print the exec output inside of a pre element
  execPrint("cd /var/www/bpo-project-web");  
  execPrint("git pull origin main");
  execPrint("git status");  
    
?>
  </body>
</html>  
