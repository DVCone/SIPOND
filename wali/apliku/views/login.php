<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<html >
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

  
</head>

<body>
  <div class="contain">
   <div id="close" class="close">Close</div>
</div>
<div class="containmain">
  <div class="center">
  <div class="profile">
    
  </div>
  <form class="form" method="post" action="<?php echo base_url();?>index.php/welcome/proses" autocomplete="on">
  <input type="text" class="topform" placeholder="Username" name="username"><br>
  <input type="password" class="bottomform" placeholder="Password" name="password"><br>
  <input type="submit">
</form>
    </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>assets/js/index.js"></script>

</body>
</html>
