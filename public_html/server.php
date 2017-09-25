<?php
header('Content-Type: text/event-stream');

for ($i = 3; $i >= 1; $i--) {
    echo "event: countdown\n";
    echo "data: $i\n";
    echo "\n";

    sleep(1);
}

echo "data: Bomb!\n";
echo "\n";
