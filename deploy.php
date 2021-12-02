<?php

exec('git status', $output, $retval);

echo 'Returned with status '.$retval. '\n';

echo '<pre>';
print_r($output);
echo '</pre>';

?>