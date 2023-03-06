<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?=base_url('images/yankee.png')?>" type="image/x-icon">
  <link rel="stylesheet" href="<?=base_url('styles/bootstrap/scss/bootstrap.css')?>">
  <link rel="stylesheet" href="<?=base_url('styles/custom.css')?>">
  <title>😎Yankee - <?= $this->renderSection('title') ;?></title>
</head>
<body>
  <?= $this->renderSection('content') ;?>
</body>
</html>