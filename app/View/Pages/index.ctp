<!-- ページタイトル -->
<?php $this->set('title_for_layout', 'Hi Wiki'); ?>

<div class="topinformation">
	<h2>Information</h2>
	<div class="informationcontents">
		<!-- ゼミログの内容を取得して表示する -->
		<p>
			テストテスト
		</p>
	</div>
</div>

<div class="topmenu">
	<button onclick="location.href='<?php echo $this->html->url('/Zemilogs');?>';">ゼミログ</button>
	<button onclick="location.href='<?php echo $this->html->url('/Members/index');?>';">メンバー</button>
	<button onclick="location.href='<?php echo $this->html->url('/Members/index');?>';">スケジュール</button>
	<button onclick="location.href='<?php echo $this->html->url('/Members/index');?>';">在室状況</button>
	<button onclick="location.href='<?php echo $this->html->url('/Members/index');?>';">アポ取り</button>
	<button onclick="location.href='<?php echo $this->html->url('/Documents');?>';">ドキュメント</button>
	<button onclick="location.href='<?php echo $this->html->url('/Papers/index');?>';">論文DB</button>	
</div>

