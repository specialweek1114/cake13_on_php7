<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<?=$html->charset()?>
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<title>
  <?=$title_for_layout?>
</title>
<meta name="keywords" content="">
<meta name="description" content="">
<?=$html->css("cake.hello")?>
<?=$scripts_for_layout?>
<!-- <link rel="stylesheet" href="style.css" type="text/css" media="screen"> -->
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<![endif]-->
<script src="js/jquery1.7.2.min.js"></script>
<script src="js/script.js"></script>
</head>

<body>

<div id="wrapper">

  <header id="header">
			<h1>ホームページサンプル株式会社のサイトです</h1>
      <!-- ロゴ -->
		<div class="logo">
			<a href="index.html"><img src="../img/logo.png" width="60" height="60" alt="Sample site" /><p>Company Name<span>Your Company Slogan</span></p></a>
		</div>
		<!-- / ロゴ -->
		<!-- 電話番号+受付時間 -->
		<div class="info">
			<p class="tel"><span>電話:</span> 012-3456-7890</p>
			<p class="open">受付時間: 平日 AM 10:00 〜 PM 5:00</p>
		</div>
		<!-- / 電話番号+受付時間 -->
	</header>

	<!-- メインナビゲーション -->
  <nav id="mainNav">
  	<a class="menu" id="menu"><span>MENU</span></a>
		<div class="panel">
    	<ul>
    		<li class="active"><a href="index.html"><strong>トップページ</strong><span>Top</span></a></li>
				<li><a href="subpage.html"><strong>ごあいさつ</strong><span>Greeting</span></a></li>
				<li><a href="subpage.html"><strong>サービス概要</strong><span>Service</span></a></li>
				<li><a href="subpage.html"><strong>弊社の取り組み</strong><span>Approach</span></a></li>
				<li><a href="subpage.html"><strong>会社情報</strong><span>Company</span></a></li>
				<li class="last"><a href="subpage.html"><strong>お問い合わせ</strong><span>Contact</span></a></li>
			</ul>
    </div>
  </nav>
  <!-- / メインナビゲーション -->

  <!-- メイン画像 -->
	<div id="mainBanner">
		<img src="../img/mainImg.jpg" alt="">
    <div class="slogan">
			<h2>自然との調和を目指す企業です</h2>
			<p>ホームページサンプルは自然との調和を目指します。<br>革新的な技術で世の中を動かす企業を目指します。</p>
		</div>
	</div>
	<!-- / メイン画像 -->

  <!-- 3カラム -->
  <section class="gridWrapper">
		<article class="grid">
      <div class="box">
				<img src="../img/top_m1.jpg" width="260" height="113" alt="">
				<h3><?=$content_for_layout?></h3>
				<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。</p>
				<p class="readmore"><a href="subpage.html">詳細を確認する</a></p>
      </div>
		</article>
		<article class="grid">
			<div class="box">
      	<img src="../img/top_m2.jpg" width="260" height="113" alt="">
				<h3>自然との調和を目指す企業です</h3>
				<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。</p>
				<p class="readmore"><a href="subpage.html">詳細を確認する</a></p>
      </div>
		</article>
    <article class="grid">
    	<div class="box">
				<img src="../img/top_m3.jpg" width="260" height="113" alt="">
				<h3>自然との調和を目指す企業です</h3>
				<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。</p>
				<p class="readmore"><a href="subpage.html">詳細を確認する</a></p>
			</div>
    </article>
	</section>
	<!-- / 3カラム -->

	<!-- フッター -->
	<footer id="footer">
		<!-- 左側 -->
		<div id="info" class="grid">
			<!-- ロゴ -->
			<div class="logo">
				<a href="index.html"><img src="../img/logo.png" width="45" height="45" alt="Sample site"><p>Company Name<br><span>Your Company Slogan</span></p></a>
			</div>
			<!-- / ロゴ -->
			<!-- 電話番号+受付時間 -->
			<div class="info">
				<p class="tel"><span>電話:</span> 012-3456-7890</p>
				<p class="open">受付時間: 平日 AM 10:00 〜 PM 5:00</p>
			</div>
			<!-- / 電話番号+受付時間 -->
		</div>
		<!-- / 左側 -->
		<!-- 右側 ナビゲーション -->
		<ul class="footnav">
			<li><a href="subpage.html">eco・環境事業</a></li>
			<li><a href="subpage.html">コンピュータ事業</a></li>
			<li><a href="subpage.html">飲食店事業</a></li>
			<li><a href="subpage.html">介護・医療事業</a></li>
			<li><a href="subpage.html">ごあいさつ</a></li>
			<li><a href="subpage.html">サービス概要</a></li>
			<li><a href="subpage.html">会社情報</a></li>
			<li><a href="subpage.html">お問い合わせ</a></li>
			<li><a href="subpage.html">サイトマップ</a></li>
		</ul>
		<!-- / 右側 ナビゲーション -->
	</footer>
	<!-- / フッター -->
	<address>Copyright(c) 2013 Sample Inc. All Rights Reserved. Design by <a href="http://f-tpl.com" target="_blank" rel="nofollow">http://f-tpl.com</a></address>
</div>

</body>
</html>