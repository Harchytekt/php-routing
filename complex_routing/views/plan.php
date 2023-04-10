<?php
$target = $params['target'] ?? 'ACE';
echo "The target is $target";

if (!isset($_GET['hide'])) {
    echo "<br>";
    echo "this is not hidden";
}
