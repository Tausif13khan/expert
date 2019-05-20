<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Feedback</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>
<?php
include_once('header1.php');
  ?>
<body>

  <div id="feedback-main">
  <div id="feedback-div">
    <form action="index.php" method="post" class="form" id="feedback-form1" name="form1" enctype="multipart/form-data">

      <p class="name">
        <input name="name" type="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" required placeholder="Name" id="feedback-name" />
      </p>

      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="feedback-email" placeholder="Email" required />
      </p>

      <p class="text">
        <textarea name="comment" type="comment" class="validate[required,length[6,300]] feedback-input" id="feedback-comment" required placeholder="Hey, I really love the site but I believe that you could incorporate some ..... and also get rid of the ...... on the section."></textarea>
      </p>

      <div class="feedback-submit">
        <input type="submit" value="SEND FEEDBACK" id="feedback-button-blue" />
        <div class="feedback-ease"></div>
      </div>
    </form>
  </div>
</div>

<!-- <button id="popup" class="feedback-button" onclick="toggle_visibility()">Feedback</button>
<script src="_include/js/feedback.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  
    function toggle_visibility() {
       var e = document.getElementById('feedback-main');
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }


src="js/index.js"></script>

-->


</body>

</html>
