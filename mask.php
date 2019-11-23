<?php

const RULE_SEND_MESSAGE         = 1; //
const RULE_VIEW_ALBUM           = 2; // 1 << 1
const RULE_VIEW_MY_MUSIC        = 4; // 1 << 2
const RULE_VIEW_MY_VIDEO        = 8; // 1 << 3
const RULE_VIEW_MY_STORIES      = 16; // 1 << 4
const RULE_COMMENT_MY_MUSIC     = 32; // 1 << 5
const RULE_COMMENT_MY_VIDEO     = 64; // 1 << 6
const RULE_VIEW_MY_STREAM       = 128; // 1 << 7

$rules = [
    RULE_SEND_MESSAGE => 'Отправлять сообщения',
    RULE_VIEW_ALBUM => 'Просматривать альбомы',
    RULE_VIEW_MY_MUSIC => 'Просматривать мою музыку',
    RULE_VIEW_MY_VIDEO => 'Просматривать мои видео',
    RULE_VIEW_MY_STORIES => 'Просматривать мои истории',
    RULE_COMMENT_MY_MUSIC => 'Комментировать мою музыку',
    RULE_COMMENT_MY_VIDEO => 'Комментировать мое видео',
];
?>

<form method="post" action="mask.php">
<? foreach ($rules as $k => $rule):?>
    <?= $rule;?>: <input type="checkbox" name="rule_<?=$k;?>"><br>
<? endforeach;?>
<input type="hidden" name="command" value="save_rules">
<input type="submit" value="Отправить">
</form>

<br>
<br>

<h3>Выбранные разрешения:</h3>
<?php
$bitMask = 0;
if (!empty($_POST['command']) && $_POST['command'] == 'save_rules') {
    foreach ($rules as $k => $rule) {
        if (!empty($_POST['rule_' . $k])) {
            echo 'разрешить: ' . $rule . '<br>';
            $bitMask += $k;
        }
    }
}

var_dump([
    'maskInt' => $bitMask,
    'bitMask' => decbin($bitMask),
    'RULE_VIEW_MY_VIDEObin' => decbin(RULE_VIEW_MY_VIDEO),
]);

echo 'разрешение на просмотр видео: ';
echo $bitMask & RULE_VIEW_MY_VIDEO ? 'разрешено' : 'запрещено';
?>