<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="favicon.ico">
    <title>Mailer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

      <div class="main">
        <h1>Mailer</h1>        
      </div>

      <form method="POST" action="send.php">
        <div class="form-group">
          <label for="Destination">Destination email address</label>
          <input type="email" class="form-control" id="Destination" name="Destination" placeholder="To" required autofocus>
        </div>
        <div class="form-group">
          <label for="Subject">Email subject</label>
          <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Subject">
        </div>
        <div class="form-group">
          <label for="From">Sender email address</label>
          <input type="email" class="form-control" id="From" name="From" placeholder="From" required>
        </div>
        <div class="form-group">
          <label for="Body">Email body</label>
          <textarea class="form-control" id="Body" name="Body" rows="5" required></textarea>
        </div>
         <button type="reset" class="btn btn-default">キャンセル</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
      <?php
        if(isset($_SESSION['statusCode'])){
          if($_SESSION['statusCode'] == '202'){
      ?>
      <div class="alert alert-success" role="alert" style="margin-top: 10px">
        <strong>Sending success</strong>
      </div>
      <?php }else{ ?>
      <div class="alert alert-danger" role="alert" style="margin-top: 10px">
        <strong>Sending failed</strong>
      </div>
      <?php 
          }
        } 
      ?>
    </div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
  </body>
</html>
