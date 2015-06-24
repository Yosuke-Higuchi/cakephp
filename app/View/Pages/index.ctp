<div class="topinformation">
	<h2>今週のお知らせ</h2>
	<div class="informationcontents">
		<!-- ゼミログの内容を取得して表示する -->
		<p>
			・6月30日にプログラミング大会の最終報告会があります。
		</p>
		<p>
			・7月7日に研究室内中間発表会を行います。
		</p>
	</div>
</div>

<div class="topmenu">
	<div class="row">
		<div class="span3">
			<button onclick="location.href='<?php echo $this->html->url('/Zemilogs/index');?>';">
				<p class="myiconstyle">
					<i class="fa fa-pencil-square"></i>
				</p>
				ゼミログ
				</button>
		</div>
		<div class="span3">
			<button onclick="location.href='<?php echo $this->html->url('/Members/index');?>';">
				<p class="myiconstyle">
					<i class="fa fa-users"></i>
				</p>
				メンバー
				</button>
		</div>
		<div class="span3">
			<button onclick="location.href='<?php echo $this->html->url('/Members/index');?>';">
				<p class="myiconstyle">
					<i class="fa fa-calendar"></i>
				</p>
				スケジュール
				</button>
		</div>
		<div class="span3">
			<button onclick="location.href='<?php echo $this->html->url('/Members/index');?>';">
				<p class="myiconstyle">
					<i class="fa fa-eye"></i>
				</p>
				在室状況
				</button>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<button onclick="location.href='<?php echo $this->html->url('/Members/index');?>';">
				<p class="myiconstyle">
					<i class="fa fa-comments"></i>
				</p>
				アポ取り
				</button>
		</div>
		<div class="span3">
			<button onclick="location.href='<?php echo $this->html->url('/Documents/index');?>';">
				<p class="myiconstyle">
					<i class="fa fa-book"></i>
				</p>
				ドキュメント
				</button>
		</div>
		<div class="span3">
			<button onclick="location.href='<?php echo $this->html->url('/Papers/index');?>';">
				<p class="myiconstyle">
					<i class="fa fa-desktop"></i>
				</p>
				論文DB
				</button>
		</div>
		<div class="span3">

		</div>
	</div>
</div>
