<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/multistream/">coopstream.ru</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/multistream/">Главная</a></li>
			<li><a href="?do=createroom">Создать комнату</a></li>
            <li><a href="?do=contact">Контакты</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Подборки стримов <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Для гомосеков</a></li>
                <li><a href="#">Раки</a></li>
                <li><a href="#">Подавляй нахуй!</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Типа заголовок подменю</li>
                <li><a href="#">Лямыч</a></li>
                <li><a href="#">Пихалыч</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <!-- Begin page content -->
    <div class="container">
      <?php
		switch($_GET['do']){
		//показываем стримчеги
		case "show":
			include_once("showChannel.php");
		break;
	
		//выводим форму для создания комнаты стримов
		case "createroom":
			include_once("createroom.php");
		break;
		
		//выводим контакты
		case "contact":
			include_once("contact.php");
		break;
		//по умолчанию действие
		default:
			include_once("defaultPage.php");
		break;
		}
	?>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">www.coopstream.ru - права типа защещены.</p>
      </div>
    </div>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
  </body>
</html>