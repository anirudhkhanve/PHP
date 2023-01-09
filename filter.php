<?php
$num="123";
if (!filter_var($num, FILTER_VALIDATE_INT)) {
echo("inyeger");
}else {
    echo("not integer");
}
?>