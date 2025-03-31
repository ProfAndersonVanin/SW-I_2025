<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>telefone</th>
        </tr>
        <?php
            for ($i=1; $i <= 10 ; $i++) { 
                echo "
                    <tr>
                        <td>coluna 1 da linha $i</td>
                        <td>coluna 2 da linha $i</td>
                        <td>coluna 3 da linha $i</td>
                    </tr>
                ";
            }
        ?>
    </table> 


    
</body>
</html>