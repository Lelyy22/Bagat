<?php
    //Payer
    $payer = $_POST['payer'];
    $emailPayer = $_POST['emailPayer'];
    $fioPayer = $_POST['fioPayer'];
    $passportDataPayer = $_POST['passportDataPayer'];
    $phonePayer = $_POST['phonePayer'];
    $cargoName = $_POST['cargoName'];
    $space = $_POST['space'];
    $weight = $_POST['weight'];
    $size = $_POST['size'];

    //Sender
    $sender = $_POST['sender'];
    $pointOfDeparture = $_POST['pointOfDeparture'];
    $carDeliveryAddress = $_POST['carDeliveryAddress'];
    $senderPhone = $_POST['senderPhone'];
    $fioSender = $_POST['fioSender'];

    //Recipient
    $recipient = $_POST['recipient'];
    $destination = $_POST['destination'];
    $deliveryAddress = $_POST['deliveryAddress'];
    $recipientPhone = $_POST['recipientPhone'];
    $fioRecipient = $_POST['fioRecipient'];

    //Other
    $addInf = $_POST['addInf'];
    $cityPay = $_POST['cityPay'];

    // Формируем заголовок письма
    $subject = "=?utf-8?B?" . base64_encode("Заявка на грузоперевозку") . "?=";
    
    // Формируем тело письма с использованием тегов HTML
    $message = "<html><body>";
    $message .= "<h2>Плательщик</h2>";
    $message .= "<p><b>ФИО:</b> " . $payer . "</p>";
    $message .= "<p><b>Почта:</b> " . $emailPayer . "</p>";
    $message .= "<p><b>Номер телефона:</b> " . $phonePayer . "</p>";
    $message .= "<p><b>Контактное лицо:</b> " . $fioPayer . "</p>";
    $message .= "<p><b>Паспортные данные:</b> " . $passportDataPayer . "</p>";
    $message .= "<h2>Информация о грузе</h2>";
    $message .= "<p><b>Наименование груза:</b> " . $cargoName . "</p>";
    $message .= "<p><b>Мест:</b> " . $space . "</p>";
    $message .= "<p><b>Вес, кг:</b> " . $weight . "</p>";
    $message .= "<p><b>Объем:</b> " . $size . "</p>";
    $message .= "<h2>Отправитель</h2>";
    $message .= "<p><b>ФИО:</b> " . $sender . "</p>";
    $message .= "<p><b>Пункт отправления:</b> " . $pointOfDeparture . "</p>";
    $message .= "<p><b>Адрес подачи автомобиля:</b> " . $carDeliveryAddress . "</p>";
    $message .= "<p><b>Номер телефона:</b> " . $senderPhone . "</p>";
    $message .= "<p><b>Контактное лицо:</b> " . $fioSender . "</p>";
    $message .= "<p><b>Получатель</b></p>";
    $message .= "<p><b>ФИО:</b> " . $recipient . "</p>";
    $message .= "<p><b>Пункт назначения:</b> " . $destination . "</p>";
    $message .= "<p><b>Адрес доставки:</b> " . $deliveryAddress . "</p>";
    $message .= "<p><b>Номер телефона:</b> " . $recipientPhone . "</p>";
    $message .= "<p><b>Контактное лицо:</b> " . $fioRecipient . "</p>";
    $message .= "<p><b>Прочее</b></p>";
    $message .= "<p><b>Дополнительная информация:</b> " . $addInf . "</p>";
    $message .= "<p><b>Город оплаты:</b> " . $cityPay . "</p>";
    $headers ="From: $emailPayer\r\nReply-to: $emailPayer\r\nContent-type: text/html; charset=utf-8\r\n";
    $success = mail("admin@groupbagat.ru", $subject, $message, $headers);
    header("Location: ../index.html");
    
?>