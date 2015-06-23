<!--  タイトルバー -->
<?php $this->set('title_for_layout', 'HI Wiki'); ?>


<div class="topinformation">
	<h2>今週のお知らせ</h2>
	<div class="informationcontents">
		<!-- ゼミログの内容を取得して表示する -->
		<p>・6月30日にプログラミング大会の最終報告会があります。</p>
		<p>・7月7日に研究室内中間発表会を行います。</p>
	</div>
</div>

<div class="topmenu">
	<div class="row">
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Zemilogs');?>';">ゼミログ</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Members');?>';">メンバー</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Schedules');?>';">スケジュール</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Stayings');?>';">在室状況</button>
		</div>
	</div>

	<div class="row">
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Appointments');?>';">アポ取り</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Documents');?>';">ドキュメント</button>
		</div>
		<div class="span3">
			<button
				onclick="location.href='<?php echo $this->html->url('/Papers');?>';">論文DB</button>
		</div>
		<div class="span3"></div>
	</div>
</div>
