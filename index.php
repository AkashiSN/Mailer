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
      <?php
        if(isset($_SESSION['statusCode'])){
          if($_SESSION['statusCode'] == '202'){
        ?>
        <div class="alert alert-success fade show" role="alert" style="margin-top: 10px">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>送信成功</strong>
        </div>
        <?php }else{ ?>
        <div class="alert alert-danger fade show" role="alert" style="margin-top: 10px">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>送信失敗</strong>
        </div>
        <?php
            }
            unset($_SESSION['statusCode']);
          }
        ?>
      <div class="main">
        <h1>Mailer</h1>
      </div>
      <ul class="nav nav-tabs" role="tablist">
         <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#text" role="tab">Text input</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#yaml" role="tab">Yaml input</a>
        </li>
      </ul>
      <script type="text/javascript">
        function addInput(){
          var div = document.createElement('div');
          div.class = 'input-group';
          div.innerHTML = '<input type="text" class="form-control" id="Destination-Name" name="Destination-Name[]" placeholder="To name">';
          var input = document.getElementById('Destination-Name_newInput');
          input.appendChild(div);
          var div = document.createElement('div');
          div.class = 'input-group';
          div.innerHTML = '<input type="text" class="form-control" id="Destination" name="Destination[]" placeholder="To address">';
          var input = document.getElementById('Destination_newInput');
          input.appendChild(div);
        }
      </script>
      <div class="tab-content">
        <div class="tab-pane active" id="text" role="tabpanel">
          <div class="card">
            <div class="card-block">
              <form enctype="multipart/form-data" action="send.php" method="POST">
                <div class="form-group" id="Destination-Name_newInput">
                  <label for="Destination-Name">送信先の名前</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="Destination-Name" name="Destination-Name[]" placeholder="To name">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="追加" onclick="addInput('Destination-Name','To name')">+</button>
                    </span>
                  </div>
                </div>
                <div class="form-group" id="Destination_newInput">
                  <label for="Destination">送信先のアドレス</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="Destination" name="Destination[]" placeholder="To address" required>
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="追加" onclick="addInput('Destination','To address')">+</button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="Subject">メールの件名</label>
                  <input type="text" class="form-control" id="Subject" name="Subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <label for="From-Name">送信元の名前</label>
                  <input type="text" class="form-control" id="From-Name" name="From-Name" placeholder="From name">
                </div>
                <div class="form-group">
                  <label for="From">送信元のアドレス</label>
                  <input type="email" class="form-control" id="From" name="From" placeholder="From address" required>
                </div>
                <div class="form-group">
                  <label for="MIME">MIMEタイプ</label>
                  <input type="text" class="form-control" id="MIME" name="MIME" placeholder="MIMEタイプ(text/plain,text/htmlなど)" required>
                </div>
                <div class="form-group">
                  <label for="Body">本文</label>
                  <textarea class="form-control" id="Body" name="Body" rows="5" required></textarea>
                </div>
                 <button type="reset" class="btn btn-default">キャンセル</button>
                <button type="submit" class="btn btn-primary">送信</button>
              </form>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="yaml" role="tabpanel">
          <div class="card">
            <div class="card-block">
              <form enctype="multipart/form-data" action="send.php" method="POST">
                <div class="form-group">
                  <label for="Yaml">ファイルのアップロード</label>
                  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                  <input type="file" class="form-control-file" id="Yaml" name="file" aria-describedby="fileHelp">
                  <small id="fileHelp" class="form-text text-muted">Yamlのみ対応。最大30000バイトまで。</small>
                </div>
                <button type="reset" class="btn btn-default">キャンセル</button>
                <button type="submit" class="btn btn-primary">送信</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
