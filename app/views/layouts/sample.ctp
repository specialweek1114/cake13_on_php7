<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $page_title; ?></title>
        <?php echo $html->css("cake.sample"); ?>
    </head>
    <body>
      <div class="row">
        <div id="header"><?php echo $content_header; ?></div>
        <div id="content">
          <?php echo $content_for_layout; ?><br /><br />
        </div>
        <div id="footer"><?php echo $content_footer; ?></div>
      </div>
    </body>
</html>