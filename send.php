<?php
if (isset($_POST['form'])) { // Это ид кнопки на которую нажмут и сработает php скрипт - Убрать если просто сообщение при заходе на страницу ( внизу скобку убрать }
    $question1 = ($_POST['question1']);
    $question2 = ($_POST['question2']);
    $question3 = ($_POST['question3']);
    $question4 = ($_POST['question4']);
    $question5 = ($_POST['question5']);

    $token = "5108107561:AAGGcexymUwZDQ0H04Lts_JZiCNZ8VjKpg0";
    $chat_id = "536396413";

    $arr = array(
        'Ответ 1:' => $question1,
        'Ответ 2:' => $question2,
        'Ответ 3:' => $question3,
        'Ответ 4:' => $question4,
        'Ответ 5:' => $question5,
    );

    foreach($arr as $key => $value) {
      $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
}
?>
