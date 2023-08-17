<?php
function foxes__internal($name, $object)
{
    $time = floor(time()/86400);
    if (!apcu_exists("foxes__internal__".$name) || apcu_fetch("foxes__internal__".$name)["time"] != $time) {
        apcu_store("foxes__internal__".$name, [
            "counts" => file_get_contents("https://foxes.cool/counts/" . $name),
            "time" => $time
        ]);
    }

    $params = http_build_query($object);
    if ($params != "") {
        $params = "?".$params;
    }

    return "https://img.foxes.cool/" . $name . "/" . mt_rand(0, apcu_fetch("foxes__internal__".$name)["counts"]-1) . ".jpg" . $params;
}

function foxes_fox($object)
{
    return foxes__internal("fox", $object);
}
    
function foxes_curious($object)
{
    return foxes__internal("curious", $object);
}
    
function foxes_happy($object)
{
    return foxes__internal("happy", $object);
}
    
function foxes_scary($object)
{
    return foxes__internal("scary", $object);
}
    
function foxes_sleeping($object)
{
    return foxes__internal("sleeping", $object);
}
