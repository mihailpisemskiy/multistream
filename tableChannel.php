<ul class="thumbnails_index" style="margin-bottom: 0">
<?
require_once('config.php');
/*БЕРЕМ КАРТИНКУ ПРОФИЛЯ 300х300 пикселей*/
function get_pic_profile($profile_name){
	$json = file_get_contents('https://api.twitch.tv/kraken/channels/'.$profile_name);
	$info = json_decode($json, true);
	if (!is_null($info['logo'])){
		return $info['logo'];
	}else{
		return false;
	}
}
if ($_POST["streamteam1"]or$_POST["streamteam2"]){
	$streams = $_POST["streamteam1"];
}
foreach($streams as $value){
 $json = file_get_contents('https://api.twitch.tv/kraken/channels/'.$value);
 $info = json_decode($json, true);
 //var_dump($info);
 $data = $info['0']; //берем первую запись в массиве
 $pic = get_pic_profile($value);
 //var_dump($pic);
 if(($data['status']==404)or(!$pic)){ //проверяем статус. 404 не существует - не показываем.
  continue;
 }else{
  ?>
      <!-- ngRepeat: stream in streamSets.flattened() -->
	  <li class="span3 stream-box ng-scope" style="position:relative" ng-repeat="stream in streamSets.flattened()">
        <a class="thumbnail_index" ng-href="" href="index.php?do=show&channel=<?=$value?>">
          <img class="cover" ng-src="" src="<? echo $pic; ?>">
          <!-- img class="preview" style="display: none" data-bind="attr:{src: preview}" -->
        </a>
        <div class="overlay">
          <div style="float:left">
            <h2 class="ng-binding"><span class="label label-primary"><?=$value?></span></h2>
			<?php //var_dump($info);?>
            <h5 class="ng-binding"><?=$info['followers']?> подписчиков</h5>
          </div>
        </div>
      </li>
  <?
 }
}
?>
</ul>