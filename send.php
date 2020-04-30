<?php
//***************** Страница с завершением заказа ******************
session_start();

// используйте структуру $product_exist, если товар уже добавлен в CRM
$product_exist = array(
    'product_id' => 40,     // код товара (заменить)
    'drop_price' => 450,    // дроп цена товара (заменить)
    'price'      => 780,    // цена продажи товара (заменить)
    'amount'     => 1,      // количество товара
    'size_title' => 'XL',   // размер товара (необязательно)
    'size_note'  => '30 см' // примечание к размеру (необязательно)
);

// используйте структуру $product_not_exist_vendor_exist, если товар ещё не добавлен в CRM, но добавлен поставщик (можно использовать и для существующих)
$product_not_exist_vendor_exist = array(
    'vendor_id'      => 150,                  // код поставщика (заменить)
    'product_title'  => 'Толстовка Reebook',  // название нового товара
    'drop_price'     => 670,                  // дроп цена товара (заменить)
    'price'          => 930,                  // цена продажи товара (заменить)
    'amount'         => 1,                    // количество товара
    'size_title'     => 'L',                  // размер товара (необязательно)
    'size_note'      => '30 см'               // примечание к размеру (необязательно)
);

// используйте структуру $product_not_exist_vendor_not_exist, если поставщик и товар ещё не добавлены в CRM (можно использовать и для существующих)
$product_not_exist_vendor_not_exist = array(
    'vendor_name'   => 'SomeDrop',   // название поставщика (заменить)
    'product_title' => 'Кеды Nike',  // название нового товара
    'drop_price'    => 450,          // дроп цена товара (заменить)
    'price'         => 780,          // цена продажи товара (заменить)
    'amount'        => 1,            // количество товара
    'size_title'    => 'XL',         // размер товара (необязательно)
    'size_note'     => '30 см'       // примечание к размеру (необязательно)
);
 
// формируем массив с товарами заказа (если товар один - оставляйте только первый элемент массива)
$products = array(
    0 => $product_not_exist_vendor_not_exist
);
// параметры запроса
$data = array(
    'name'            => $_REQUEST['name'],                // имя покупателя
    'phone'           => $_REQUEST['phone'],               // телефон
    'products'        => $products,                        // массив с товарами заказа
    'order_source'    => 'Лендинг',                        // источник заказа (необязательно)
    'traffic_source'  => 'AdWords',                        // источник трафика (необязательно)
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source (необязательно)
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium (необязательно)
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term (необязательно)
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content (необязательно)
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'],// utm_campaign (необязательно)
);
 
// запрос
$curl = curl_init();
$production_url = 'https://backend.mydrop.pp.ua/dropshipper/api/orders';
curl_setopt($curl, CURLOPT_URL, $production_url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'X-API-KEY: ваш_API_ключ', // замените на ваш API-ключ
    'Content-Type: application/json'
));
$out = curl_exec($curl);
curl_close($curl);
//$out – ответ сервера в формате JSON
?>

<?php
$phone = $_POST['phone'];
if(empty($phone)) {
?>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Спасибо!</title>
</head>
<body style="color: rgb(0, 0, 0); max-width: 980px; min-width: 300px; width: auto; margin: 0px auto; background-color: rgb(255, 255, 255); font-family: pt sans,arial;">
    <br><br>
    <center style="padding: 15px 30px; border: 3px solid rgb(63, 63, 63); background-color: rgb(255, 161, 161);">
        <h1 style="font-size: 1.4rem;">
            Вы не ввели необходимые данные!<br>
            Вернитесь на сайт и заполните контакнутю форму.<br>
        </h1>
    </center>
    <br><br>
    <a style="display: inline-block;height: 53px;height: 5.3rem;margin: 0px 0 0px;padding: 0 24px; font-size: 1.8rem; letter-spacing: 0.02em; line-height: 53px; line-height: 5.3rem; text-align: center; text-decoration: none; color: black; transition: background-color 0.2s ease-out 0s; border-radius: 7px; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); -webkit-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); -moz-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); background: rgb(196, 255, 161); width:500px;margin:0 auto;display:block; border: 1px solid #ccc;" href="./" class='hover'>
        Вернуться на сайт
    </a>
</body>
</html>
<?php

} else {
	
$email2="someemail@gmail.com";                                        // почта, куда отправляем письмо
$headers  =  'MIME-Version: 1.0' . "\r\n";
$headers .=  'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .=  'To: <'.$email2.'>, '."\r\n";
$headers .=  'From: <site.ru>' . "\r\n";                              // адрес отправителя, это заголовок письма, менять не обязательно
$subject2    = "Конструктор 14 в 1 Solar Robot [http://example.com]"; // заголовок
$message2    = "
<br>Имя: ".$_POST['name']."
<br>Телефон: ".$_POST['phone']."
<br>IP-адрес посетителя: ".@$_SERVER['REMOTE_ADDR']."
<br>Время заказа: ".date('Y-m-d H:i:s');
$mail=mail($email2, $subject2, $message2, $headers);
if($mail==true){

?>
<html>
<head><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><title>Спасибо!</title></head>
<body style="color: rgb(0, 0, 0); max-width: 980px; min-width: 300px; width: auto; margin: 0px auto; background-color: rgb(255, 255, 255); font-family: pt sans,arial;">
<br><br>
<center style="padding: 15px 30px; border: 3px solid rgb(63, 63, 63); background-color: rgb(196, 255, 161);">
<h1 style="font-size: 1.4rem;">Благодарим за Заявку!<br>
Ваша заявка принята и поставлена в обработку.<br>
Вы указали следующие данные для обратной связи:<br><hr>
Имя:
<?php
 echo $_POST['name'];
 ?><br>
 Телефон:
 <?php
 echo $_POST['phone'];
 ?>
</h1></center><br><br>
<a style="display: inline-block;height: 53px;height: 5.3rem;margin: 0px 0 0px;padding: 0 24px; font-size: 1.8rem; letter-spacing: 0.02em; line-height: 53px; line-height: 5.3rem; text-align: center; text-decoration: none; color: black; transition: background-color 0.2s ease-out 0s; border-radius: 7px; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); -webkit-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); -moz-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); background: rgb(196, 255, 161); width:500px;margin:0 auto;display:block; border: 1px solid #ccc;" href="./" class='hover'>
Вернуться на сайт</a>

<!-- ниже код метрики (для отслеживания конверсии) -->

<!-- выше код метрики -->
<style>
.hover:hover {
	background:#9FD083 !important;
	transition:all .3s ease-in-out;
}
</style>
    
</body>
</html>
<?php

} else {
    echo "no";
}
}

?>
