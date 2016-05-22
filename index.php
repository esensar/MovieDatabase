<?php include 'gori.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
    <?php include 'header.php'; ?>
    <div class="content">
      <?php $newsFile = file($openShiftFolder."vijesti.csv");
      foreach ($newsFile as $news) {?>
        <div class="news">
        <?php
        $nesto = str_getcsv($news);
        $image = $nesto[1];
        $timeOfNews = $nesto[0];
        $newsContent = $nesto[2];
        ?>
        <img src="<?php echo (strlen($image)!=0)?$image:'no_image.png' ?>"/>
        <p>
          <time class='vrijeme' datetime="<?php echo $timeOfNews ?>"></time>
          <?php echo $newsContent ?>
        </p>
        </div>
        <?php
      }?>
    </div>
  </BODY>
</HTML>
