<?php
$array_multidimensional = array(
array(1,2),
array(3,4),
array(5,6)
);

// Utilizamos o <pre> pra melhorar a visualização da informação
echo "<pre>";
print_r($array_multidimensional);
echo "</pre>";

// essa informação será exibida em tela
// Array
// (
//     [0] => Array
//         (
//             [0] => 1
//             [1] => 2
//         )

//     [1] => Array
//         (
//             [0] => 3
//             [1] => 4
//         )

//     [2] => Array
//         (
//             [0] => 5
//             [1] => 6
//         )

// )
$chave = array_search(3, array_column($array_multidimensional, '0'));  


echo "<pre>";
print_r($array_multidimensional[$chave]);
echo "</pre>";

// essa informação será exibida em tela
// Array
// (
//     [0] => 3
//     [1] => 4
// )

?>
