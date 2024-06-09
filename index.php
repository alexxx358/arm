<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">

  <title>Отправка формы на почту </title>

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <style>
    form {
    		background-color: #f9f9f9;
    		padding: 20px;
    		margin: 20px;
    	}
    </style>
</head>

<body>
  <div class="container">

    <div class="row">
      <div class="col-sm-4">
        <form action="telegram.php" method="POST">
          <legend>Заголовок формы</legend>

          <div class="form-group">
            <label for="">Введите ваше имя</label>
            <input type="text" class="form-control" id="" name="user_name" placeholder="Doniyor">
          </div>

          <div class="form-group">
            <label for="">Введите номер телефона</label>
            <input type="text" class="form-control" id="" name="user_phone" placeholder="+99890 319 85 85">
          </div>

          <div class="form-group">
            <label for="">Введите email</label>
            <input type="text" class="form-control" id="" name="user_email" placeholder="mail@mail.ru">
          </div>
          <div class="form-group">
            <label for="">Введите сообщения</label>
            <!-- <input type="text" class="form-control" id="" name="user_message" placeholder="сообщения"> -->
            <textarea name="user_message" cols="30" rows="10" placeholder="сообщения"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Отправить форму</button>
        </form>
      </div><!-- .col-sm-4 -->
    </div> <!-- .row -->

  </div><!-- /.container -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>