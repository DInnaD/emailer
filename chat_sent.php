<?php
// Emails form data to you and the person submitting the form
// This version requires no database.
// Set your email below
$emails = $_POST['emails']; // Replace with your email, please

// Receive and sanitize input
$subject = $_POST['subject'];

$message = $_POST['message'];




// set up email
$msg = "Form mailing!\nSubject: " . $subject . "\nEmails: " . $emails . "\nMessage: " . $message;
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
    //if($emails_arr[$i]!="") { // Проверка на случай попадения в массив пустого значения
    //if(mail($emails,$subject,$message)) $report.="<li><span style=\"color:green;\">Sent: ".$emails_arr[$i]."</span></li>"; else $report.="<li><span style=\"color:red;\">Error sent: ".$emails_arr[$i]."<span></li>";
    
    mail($email,"Emailer",$msg);
    sleep(5); // Делаем тайм-аут в 5 секунd
    }


//mail($mail,"Thank you for your message",$msg);
echo 'Thank you for your message.  Please <a href="chat.php">Click here to return to our homepage.';

?>