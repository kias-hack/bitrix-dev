function custom_mail($to, $subject, $message, $additionalHeaders = '')
{
   /*
    * Получаем идентификатор конца строки у Битрикса.
    */
   $eol = CAllEvent::GetMailEOL();

   $additionalHeaders .= $eol . 'Subject: ' . $subject;

   return mail('<Ваш Email>example@test.ru', $subject . ' ' . $to, $message, $additionalHeaders);
}
