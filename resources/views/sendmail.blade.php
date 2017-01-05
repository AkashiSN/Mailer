<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Mailer
    </title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/jquery-3.1.1.min.js">
    </script>
  </head>
  <body>
    <div class="container">
      <div class="col-lg-6">
        <div class="well bs-component">
          <form class="form-horizontal">
            <fieldset>
              <legend>メール送信
              </legend>
              <div class="form-group">
                <label for="inputSubject" class="col-lg-2 control-label">Subject
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">To:
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputEmail" placeholder="To:">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">From:
                </label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="inputEmail" placeholder="From:">
                </div>
              </div>
              <div class="form-group">
                <label for="textArea" class="col-lg-2 control-label">Body
                </label>
                <div class="col-lg-10">
                  <textarea class="form-control" rows="5" id="textArea">
                  </textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">キャンセル
                  </button>
                  <button type="submit" class="btn btn-primary">送信
                  </button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
