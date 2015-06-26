<!-- トップページ -->

<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'HI Wiki'); ?>

<div class="topinformation">
	<h2>今週のお知らせ</h2>
	<div class="informationcontents">
		<!-- ゼミログの内容を取得して表示する -->
		<p><?php echo h($zemilogs['Zemilog']['title']);?>のゼミログ</p>
		<?php
		echo Markdown($zemilogs ['Zemilog'] ['body'] );
		?>
	</div>
</div>

<div class="topmenu">
	<div class="row">
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Zemilogs');?>';">
				<p class="myiconstyle">
					<i class="fa fa-pencil-square"></i>
				</p>
				ゼミログ
			</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Members');?>';">
				<p class="myiconstyle">
					<i class="fa fa-users"></i>
				</p>
				メンバー
			</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Schedules');?>';">
				<p class="myiconstyle">
					<i class="fa fa-calendar"></i>
				</p>
				スケジュール
			</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Stayings');?>';">
				<p class="myiconstyle">
					<i class="fa fa-eye"></i>
				</p>
				在室状況
			</button>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Appointments');?>';">
				<p class="myiconstyle">
					<i class="fa fa-comments"></i>
				</p>
				アポ取り
			</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Documents');?>';">
				<p class="myiconstyle">
					<i class="fa fa-book"></i>
				</p>
				ドキュメント
			</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Papers');?>';">
				<p class="myiconstyle">
					<i class="fa fa-database"></i>
				</p>
				論文DB
			</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Studies');?>';">
				<p class="myiconstyle">
					<i class="fa fa-pie-chart"></i>
				</p>
				勉強会＆輪講
			</button>
		</div>
	</div>
</div>
