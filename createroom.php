<div class="page-header">
	<h1>Создать комнату стримов</h1>
</div>
<?php
if (!isset($_POST["streamteam1"])or(!isset($_POST["streamteam2"]))){
?>
<form name="streamsRoom" method="POST" action="./?do=show">
<div class="tabbable tabs-left">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#team1" data-toggle="tab">Команда 1</a></li>
		<li class=""><a href="#team2" data-toggle="tab">Команда 2</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="team1">
			<div class="row">
			  <div class="col-lg-6">
				<div class="input-group">
				</br>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №1</span>
					  <input type="text" name="streamteam1[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №2</span>
					  <input type="text" name="streamteam1[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №3</span>
					  <input type="text" name="streamteam1[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №4</span>
					  <input type="text" name="streamteam1[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №5</span>
					  <input type="text" name="streamteam1[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №6</span>
					  <input type="text" name="streamteam1[]" class="form-control" placeholder="">
					</div>
				</div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			  <div class="col-lg-6">

			  </div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div>
		<div class="tab-pane" id="team2">
			<div class="row">
			  <div class="col-lg-6">
				<div class="input-group">
				</br>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №1</span>
					  <input type="text" name="streamteam2[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №2</span>
					  <input type="text" name="streamteam2[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №3</span>
					  <input type="text" name="streamteam2[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №4</span>
					  <input type="text" name="streamteam2[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №5</span>
					  <input type="text" name="streamteam2[]" class="form-control" placeholder="">
					</div>
					<div class="input-group input-group-lg">
					  <span class="input-group-addon">Стрим №6</span>
					  <input type="text" name="streamteam2[]" class="form-control" placeholder="">
					</div>
				</div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			  <div class="col-lg-6">

			  </div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div>
	</div>
</div>
</br>
<button class="btn btn-default" type="reset">Очистить заполнение</button>
<button class="btn btn-primary" type="submit">Создать комнату</button>
</form>
<?php
}else{
	var_dump($_POST);
}
?>