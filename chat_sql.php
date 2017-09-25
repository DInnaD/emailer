<?php
require_once 'config.php';

$sql = "SELECT id FROM chat";
$result = $db->query($sql);
if (empty($result)) {


    $sql = "CREATE TABLE `chat` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `subject` text COLLATE utf8_unicode_ci,
        
         `emails` int(11) DEFAULT NULL,
         `message` text COLLATE utf8_unicode_ci,
         `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
         PRIMARY KEY (`id`)
         ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";


        $result = $db->query($sql);
}




// Receive and sanitize input
$subject = mysqli_real_escape_string($db, $_POST['subject']);
$emails = mysqli_real_escape_string($db, $_POST['emails']);

$message = mysqli_real_escape_string($db, $_POST['message']);

// write to db
$sql = "INSERT INTO chat (subject,emails,message) VALUES ('$subject','$emails','$message')";
$result = $db->query($sql);

// set up email
$msg = "Form mailing!\nName: " . $subject . "\nEmails: " . $emails . "\nMessage: " . $message;
$msg = wordwrap($msg,70);


// Получаем массив адресов. В качестве разделителя у нас используется запятая.
    $emails_arr=explode(",", $emails);
    $count_emails = count($emails_arr); // Подсчёт количества адресов
    // Запускаем цикл отправки сообщений
    for ($i=0; $i<=$count_emails-1; $i++) // Отчёт начинается в массиве с нуля, поэтому уменьшаем сумму на единицу
    {
    // Подставляем адреса получаетелей и обрезаем пробелы с обоих сторон, если таковые имеются
    $email=trim($emails_arr[$i]);
    // Отправляем письмо и готовим отчёт по отправке
    if($emails_arr[$i]!="") { // Проверка на случай попадения в массив пустого значения
    if(mail($emails,$subject,$message)) $report.="<li><span style=\"color:green;\">Sent: ".$emails_arr[$i]."</span></li>"; else $report.="<li><span style=\"color:red;\">Error sent: ".$emails_arr[$i]."<span></li>";
    sleep(5); // Делаем тайм-аут в 5 секунд
    mail($emails_arr[$i],"Emailer",$msg);
    }
}



echo 'Thank you for your submission.  Please <a href="chat.php">Click here to return to our homepage.';

?>
