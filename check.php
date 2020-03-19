<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Гарантированный прием значений от чекбоксоав</title>
  <meta charset='utf-8'>
</head>
<body>
  <?php
  if (isset($_REQUEST['doGo1'])) {
    foreach ($_REQUEST['known'] as $a => $v) {
      if($v) echo "Вы знаете язык программирования $a!<br>";
      else echo "Вы не знаете языка программирования $a. <br>";
    }
  }
  ?>
  <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    Какие языки программирования вы знаете?<br />
    <input type="hidden" name="known[PHP]" value="0">
    <input type="checkbox" name="known[PHP]" value="1">PHP<br />
  
    <input type="hidden" name="known[C]" value="0">
    <input type="checkbox" name="known[C]" value="1">C<br />
  
    <input type="submit" name="doGo1" value="ответьте на вопросы">
  </form>
</body>
</html>
