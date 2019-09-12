<!DOCTYPE html>
<html>
<head>
<title>Akane Pagination Test</title>
<?= $this->assetHelper->extcss('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') ?>
<?= $this->assetHelper->extcss('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css') ?>
<?= $this->assetHelper->css('baru.css') ?>
</head>
<body>
<?= $this->render('header'); ?>
<?= $content; ?>
<?= $this->render('footer'); ?>
</body>
</html>