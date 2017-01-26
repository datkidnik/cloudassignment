<html>
  <body>
    <?php
    if (array_key_exists('content', $_POST)) {
      echo "You wrote:<pre>\n";
      echo htmlspecialchars($_POST['content']);
      echo "\n</pre>";
    }
    ?>
    <form action="/sign" method="post">
      <div>A<input type="text" name="A" size="25"></div>
      <div>B<input type="text" name="B" size="25"></div>
      <div>C<input type="text" name="C" size="25"></div>
      <div><input type="submit" value="Submit"></div>
    </form>
  </body>
</html>