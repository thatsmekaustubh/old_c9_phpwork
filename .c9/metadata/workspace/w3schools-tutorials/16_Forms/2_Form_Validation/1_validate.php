{"filter":false,"title":"1_validate.php","tooltip":"/w3schools-tutorials/16_Forms/2_Form_Validation/1_validate.php","undoManager":{"mark":0,"position":0,"stack":[[{"group":"doc","deltas":[{"action":"insertText","range":{"start":{"row":0,"column":0},"end":{"row":0,"column":16}},"text":"<!DOCTYPE HTML> "},{"action":"insertText","range":{"start":{"row":0,"column":16},"end":{"row":1,"column":0}},"text":"\n"},{"action":"insertLines","range":{"start":{"row":1,"column":0},"end":{"row":57,"column":0}},"lines":["<html>","<head>","</head>","<body> ","","<?php","// define variables and set to empty values","$name = $email = $gender = $comment = $website = \"\";","","if ($_SERVER[\"REQUEST_METHOD\"] == \"POST\") {","   $name = test_input($_POST[\"name\"]);","   $email = test_input($_POST[\"email\"]);","   $website = test_input($_POST[\"website\"]);","   $comment = test_input($_POST[\"comment\"]);","   $gender = test_input($_POST[\"gender\"]);","}","","function test_input($data) {","   $data = trim($data);","   $data = stripslashes($data);","   $data = htmlspecialchars($data);","   return $data;","}","?>","","<h2>PHP Form Validation Example</h2>","<form method=\"post\" action=\"<?php echo htmlspecialchars($_SERVER[\"PHP_SELF\"]);?>\"> ","   Name: <input type=\"text\" name=\"name\">","   <br><br>","   E-mail: <input type=\"text\" name=\"email\">","   <br><br>","   Website: <input type=\"text\" name=\"website\">","   <br><br>","   Comment: <textarea name=\"comment\" rows=\"5\" cols=\"40\"></textarea>","   <br><br>","   Gender:","   <input type=\"radio\" name=\"gender\" value=\"female\">Female","   <input type=\"radio\" name=\"gender\" value=\"male\">Male","   <br><br>","   <input type=\"submit\" name=\"submit\" value=\"Submit\"> ","</form>","","<?php","echo \"<h2>Your Input:</h2>\";","echo $name;","echo \"<br>\";","echo $email;","echo \"<br>\";","echo $website;","echo \"<br>\";","echo $comment;","echo \"<br>\";","echo $gender;","?>","","</body>"]},{"action":"insertText","range":{"start":{"row":57,"column":0},"end":{"row":57,"column":7}},"text":"</html>"}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":57,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1408532879083,"hash":"ca54aad7766cc6242eaf4b6e4f630222e758bf4b"}