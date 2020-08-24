<?php

$id_register = filter_input(INPUT_GET, 'id_register', FILTER_SANITIZE_NUMBER_INT);

echo 'Quer mesmo excluir esse registro?';
echo "<a href='delete.php?id_register=$id_register'>YES</a> | ";
echo "<a href='./search.php'>NO</a>";