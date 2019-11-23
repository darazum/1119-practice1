<?php
function addGood(int $goodId, array &$session)
{
    $session['goods'][] = $goodId;
}

function getMyGoods(array $ids, array $goodsConfig)
{
    $result = [];
    foreach ($ids as $id) {
        if (isset($goodsConfig[$id])) {
            $result[] = $goodsConfig[$id];
        }
    }
    return $result;
}

function calcPrice(array $goods)
{
    $sum = 0;
    array_map(function(array $good) use (&$sum) {
        $sum += $good['price'];
    }, $goods);
    return $sum;
}

function redirect(string $url)
{
    header('Location: ' . $url);
}