<?php

// see if var is defined in get or post vars
function post_get($var) {
    if (isset($_GET[$var]) && strlen($_GET[$var]) > 0) {
        return $_GET[$var];
    } else if (isset($_POST[$var]) && strlen($_POST[$var]) > 0) {
        return $_POST[$var];
    } else {
        return null;
    }
}

function get_clip_json() {
    $json = file_get_contents("clip.txt");
    return $json;
}

function set_clip_json($clip) {
    $n = file_put_contents("clip.txt", $clip);
    return $n;
}

function main() {
    $clip = post_get("clip");
    if (0 < strlen($clip)) {
        // update clipboard to $clip
        $json = json_encode($clip);
        set_clip_json($json);

        // repeat clipboard back
        $j = get_clip_json();
        header("Content-Type: application/json");
        echo($j);
    }
}

main();

?>
