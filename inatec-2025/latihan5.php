<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>True</th>
        <th>True</th>
        <th>AND</th>
        <th>OR</th>
        <th>XAND</th>
        <th>XOR</th>
    <tr>
        <td>True</td>
        <td>True</td>
        <td><?php var_dump(true && true); ?></td>
        <td><?php var_dump(true || true); ?></td>
        <td><?php var_dump(!(true && true))?></td>
        <td><?php var_dump(!(true || true))?></td>
    </tr>
    <tr>
        <td>True</td>
        <td>False</td>
        <td><?php var_dump(true && true); ?></td>
        <td><?php var_dump(true || true); ?></td>
        <td><?php var_dump(!(true && true))?></td>
        <td><?php var_dump(!(true || true))?></td>
    </tr>
    <tr>
        <td>False</td>
        <td>True</td>
        <td><?php var_dump(true && true); ?></td>
        <td><?php var_dump(true || true); ?></td>
        <td><?php var_dump(!(true && true))?></td>
        <td><?php var_dump(!(true || true))?></td>
    </tr>
    <tr>
        <td>False</td>
        <td>False</td>
        <td><?php var_dump(true && true); ?></td>
        <td><?php var_dump(true || true); ?></td>
        <td><?php var_dump(!(true && true))?></td>
        <td><?php var_dump(!(true || true))?></td>
    </tr>
 </table>   
</body>
</html>