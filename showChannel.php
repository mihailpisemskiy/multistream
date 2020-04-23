<?php
$team1_count = 0; //счётчик игроков первой команды
$team2_count = 0; //счётчик игроков второй команды
$arr_playersTeam1 = array();
$arr_playersTeam2 = array();

if (isset($_POST['streamteam1'])){ //проверяем сколько непустых в первой команде
	foreach ($_POST['streamteam1'] as $streamname){
		if (strlen($streamname)>0){
			$arr_playersTeam1[]=$streamname;
			$team1_count++;
		}
	}
}
if (isset($_POST['streamteam2'])){ //проверяем сколько непустых во второй команде
	foreach ($_POST['streamteam2'] as $streamname){
		if (strlen($streamname)>0){
			$arr_playersTeam2[]=$streamname;
			$team2_count++;
		}
	}
}
//подключаем нужный макет для первой команды в зависимости от количества игроков
if ($team1_count>0){
$team = 1;
?><h3><span class="label label-default">Команда 1</span></h3><?
	switch($team1_count){
	
	case 1:
		include("layouts/layout1.php");
	break;
	
	case 2:
		include("layouts/layout2.php");
	break;
	
	case 3:
		include("layouts/layout3.php");
	break;

	case 4:
		include("layouts/layout4.php");
	break;
	
	case 5:
		include("layouts/layout5.php");
	break;
	
	case 6:
		include("layouts/layout6.php");
	break;
	/*
	default:
		include("defaultPage.php");
	break;
	*/
	}
}
if ($team2_count>0){
$team = 2;
?><h3><span class="label label-default">Команда 2</span></h3><?
	switch($team2_count){
	
	case 1:
		include("layouts/layout1.php");
	break;
	
	case 2:
		include("layouts/layout2.php");
	break;
	
	case 3:
		include("layouts/layout3.php");
	break;

	case 4:
		include("layouts/layout4.php");
	break;
	
	case 5:
		include("layouts/layout5.php");
	break;
	
	case 6:
		include("layouts/layout6.php");
	break;
	/*
	default:
		include("defaultPage.php");
	break;
	*/
	}
}

if (isset($_GET['channel'])){
?>
<div class="row oneChannel">
  <div class="col-md-9">
	<object type="application/x-shockwave-flash" data="http://www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" width="100%" height="500px" id="ember1210-flash-player" style="visibility: visible;">
	<param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque">
	<param name="bgcolor" value="000000"><param name="flashvars" value="channel=<?=$_GET['channel']?>&amp;hide_chat=true&amp;auto_play=true&amp;eventsCallback=Twitch.player.FlashPlayer2.callbacks.callback0"></object>
  </div>
  <div class="col-md-3">
	<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://www.twitch.tv/<?=$_GET['channel']?>/chat" height="500" width="350"></iframe>
  </div>
</div>
<?} ?>