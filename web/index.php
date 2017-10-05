<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form test</title>
 </head>
<body>

  <?php if (isset($_GET['submitted'])) { ?>
    <h1>The server had accepted:</h1>
    <p>radio: <?php echo htmlspecialchars($_GET['radio']); ?></p>
    <p>text: <?php echo htmlspecialchars($_GET['text']); ?></p>
    <p style="background:<?php echo htmlspecialchars($_GET['color']); ?>; width:40px">)</p>
    <p>date: <?php echo htmlspecialchars($_GET['date']); ?></p>
    <p>month: <?php echo htmlspecialchars($_GET['month']); ?></p>
    <p>email: <?php echo htmlspecialchars($_GET['email']); ?></p>
    <p>my-number: <?php echo htmlspecialchars($_GET['number']); ?></p>

    
    <p>Текст: <?php echo htmlspecialchars($_GET['my-textarea']); ?></p>
    <p>Try again? <a href="/index.php">Yes!</a></p>
  <?php } ?>

  <?php if (!isset($_GET['submitted'])) { ?>
  
  <h1>Play with the HTML form</h1>
  <form action="/index.php">
    <input type="hidden" name="submitted" value="yes">
    <p>
      <label for="my-radio-yes">radio Yes: </label>
      <input id="my-radio-yes" name="radio" type="radio" required value="Yes">
      <label for="my-radio-no">radio No: </label>
      <input id="my-radio-no" name="radio" type="radio" required value="No"></p>
    <br>
    
	  <p><input type="text" name="text" required maxlength="4" placeholder="Введите текст.." required></p>
	  <p><input type="color" name="color" required></p>
	  <p><input type="date" name="date" required></p>
    <p><label for="my-month">month: </label>
        <input id="my-month" type="month" required></p>
    <p><label for="my-email">email: </label>     
        <input id="my-email" type="email" required></p>
    <p><label for="my-radio">radio: </label>      
       <input id="my-radio" name="radio" type="radio" required>
       <input name="radio" type="radio" required></p>
    <p><label for="my-number">number: </label>     
      <input id="my-number" type="number"></p>
    <p><label for="my-range">range: </label>       
      <input id="my-range" type="range" min="0" max="10"></p>
    <p><label for="my-checkbox">checkbox: </label> 
      <input id="my-checkbox" type="checkbox" checked></p>
<p>
<select id="my-select" name="myselect" size="2" multiple required>
  <option value="">-------</option>
  <option value="1">Первая</option>
  <option value="2">Вторая</option>
  <option value="3">Третья</option>
</select>
</p>	  
<p>
<textarea name="my-textarea" id="my-textarea" cols="30" rows="10" style="resize:none" placeholder="Введите текст...."></textarea>
</p>
<p>
  <input type="hidden" value="2">
</p>
    <input type="submit" value="Submit">
    <input type="reset" value="Clear">
  </form>

  <?php } ?>

</body>
</html>