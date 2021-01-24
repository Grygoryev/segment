<?php


  $name = $_POST['user_name'];
  $tel = $_POST['user_phone'];
  $comment = $_POST['user_comment'];

  echo $name;
  echo '123';
	echo '<pre>';
  print_r($_POST);

	echo '</pre>';
//  $name = htmlspecialchars($name);
//  $tel = htmlspecialchars($tel);
//  $textarea= htmlspecialchars($textarea);

//  $name = urldecode($name);
//  $tel = urldecode($tel);
//  $textarea= urldecode($textarea);
//
//  $name = trim($name);
//  $tel = trim($tel);
//  $textarea= trim($textarea);

  if (mail(
    "nikesushko@gmail.com",
    "G.ONLINE",
    "login: ".$name."\n"
//    "login: ".$name."\n".
//    "tel: ".$tel."\n".
//    "text: ".$textarea."\n",
//    "From: grygoryev.online \r\n"
  )
  ) {
    echo ('ОТПРАВЛЕНО');
  } else {
    echo ('НИЧЕГО НЕ ОТПРАВЛЕНО');
  }
?>