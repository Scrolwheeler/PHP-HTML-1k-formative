<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="contact-sent.php" method="post" class="form-example">
  <div class="form-example">
    <label for="name">Enter your name: </label>
    <input type="text" name="name" id="name" required />
  </div>
  <div class="form-example">
    <label for="email">Enter your email: </label>
    <input type="text" name="email" id="email" required />
    <textarea id="message" name="message" rows="5" cols="15">Write something here</textarea>
  </div>
  <div class="form-example">
    <input type="submit" value="Subscribe!" />
  </div>
</form>
</body>
</html>