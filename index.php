<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php contact form</title>
  </head>
  <body>
<main>
  <p>SEND EMAIL</p>
      <form class="contact-form center" action ="contactform.php" method="post">
        <input type="text" name="name" placeholder="Full name">
        <input type="text" name="mail" placeholder="your e-mail"
        <input type="text" name="subject" placeholder="Subject">
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="Submit">SEND MAIL</button>

    </form>

</main>
  </body>
</html>
