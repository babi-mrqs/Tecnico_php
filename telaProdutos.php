<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<?php
    $arquivo = fopen('products.csv', 'r');
    while ($linha = fgetcsv($arquivo)){
        $arrayLinha = explode(';', $linha[0]);

        $produto = [
            'codigo' => $arrayLinha[0],
            'descrição' => $arrayLinha[1],
            'preco' => $arrayLinha[2]
        ]
        array_push($produtos, $produto);
    }
?>

<body>
    <h1>Produtos</h1>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
           <?php foreach ($produtos as $produto) {?>
            <th>
                <td><?php echo $produto[0] ?></td>
                <td><?php echo $produto[1] ?></td>
            </th>
           <?php }?>
        </tbody>
    </table>
</body>
</html>