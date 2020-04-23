<?php
if ($team==1){
	$arrPlayers = $arr_playersTeam1;
}
if ($team==2){
	$arrPlayers = $arr_playersTeam2;
}
	foreach ($arrPlayers as $streamname){
		if (strlen($streamname)>0){
			?>
			<div class="row-fluid">
			  <div class="span12">
				<? if ($team==1){ ?> <span class="label label-success"><?=$streamname?></span> <?} ?>
				<? if ($team==2){ ?> <span class="label label-danger"><?=$streamname?></span> <?} ?>
				<object type="application/x-shockwave-flash" data="http://www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" width="100%" height="230px" id="ember1210-flash-player" style="visibility: visible;">
				<param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque">
				<param name="bgcolor" value="000000"><param name="flashvars" value="channel=<?=$streamname?>&amp;hide_chat=true&amp;auto_play=true&amp;eventsCallback=Twitch.player.FlashPlayer2.callbacks.callback0"></object>
			  </div>
			</div>
			<?
		}
	}
?>