<?php
if ($team==1){
	$arrPlayers = $arr_playersTeam1;
}
if ($team==2){
	$arrPlayers = $arr_playersTeam2;
}
	?>
<div  class= "row" >
  <div  class= "col-md-12" >
  	<? if ($team==1){ ?> <span class="label label-success"><?=$arrPlayers[0] ?></span> <?} ?>
	<? if ($team==2){ ?> <span class="label label-danger"><?=$arrPlayers[0] ?></span> <?} ?>
	<object type="application/x-shockwave-flash" data="http://www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" width="100%" height="230px" id="ember1210-flash-player" style="visibility: visible;">
	<param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque">
	<param name="bgcolor" value="000000"><param name="flashvars" value="channel=<?=$arrPlayers[0] ?>&amp;hide_chat=true&amp;auto_play=true&amp;eventsCallback=Twitch.player.FlashPlayer2.callbacks.callback0"></object>
  </div> 
</div>
<div  class= "row" >
  <div  class= "col-md-6" >
    <? if ($team==1){ ?> <span class="label label-success"><?=$arrPlayers[1] ?></span> <?} ?>
	<? if ($team==2){ ?> <span class="label label-danger"><?=$arrPlayers[1] ?></span> <?} ?>
	<object type="application/x-shockwave-flash" data="http://www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" width="100%" height="230px" id="ember1210-flash-player" style="visibility: visible;">
	<param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque">
	<param name="bgcolor" value="000000"><param name="flashvars" value="channel=<?=$arrPlayers[1] ?>&amp;hide_chat=true&amp;auto_play=true&amp;eventsCallback=Twitch.player.FlashPlayer2.callbacks.callback0"></object>
  </div> 
  <div  class= "col-md-6" >
  	<? if ($team==1){ ?> <span class="label label-success"><?=$arrPlayers[2] ?></span> <?} ?>
	<? if ($team==2){ ?> <span class="label label-danger"><?=$arrPlayers[2] ?></span> <?} ?>
	<object type="application/x-shockwave-flash" data="http://www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" width="100%" height="230px" id="ember1210-flash-player" style="visibility: visible;">
	<param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque">
	<param name="bgcolor" value="000000"><param name="flashvars" value="channel=<?=$arrPlayers[2] ?>&amp;hide_chat=true&amp;auto_play=true&amp;eventsCallback=Twitch.player.FlashPlayer2.callbacks.callback0"></object>
  </div> 
</div>
	<?
?>