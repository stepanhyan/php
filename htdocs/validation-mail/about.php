<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/about.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>WebPage</title>
</head>
<body>
  <?php  
    if($_COOKIE['user'] !=''):
  ?>
    <?php require "../blocks/headlogedin.php"?>
    <div class="container mt-5 form">
    <form class="form" action="/validation-mail/check.php" method="post">
      <input type="email" name="email" placeholder="Enter Email" class="form-control email">
      <textarea name="message" class="form-control txtarea" placeholder="Enter yout Message"></textarea>
      <button type="submit" name="send" class="btn btn-success">Sent</button>
    </form>
  </div>
  <?php require "../blocks/footer.php"?>
  <?php else: ?>
  <?php require "../blocks/header.php"?>
  <div class="container mt-5 form">
    <form class="form" action="/validation-mail/check.php" method="post">
      <input type="email" name="email" placeholder="Enter Email" class="form-control email">
      <textarea name="message" class="form-control txtarea" placeholder="Enter yout Message"></textarea>
      <button type="submit" name="send" class="btn btn-success">Sent</button>
    </form>
  </div>
  <?php require "../blocks/footer.php"?>
  <?php endif; ?>
</body>
</html>