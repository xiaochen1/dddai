<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>

        <?php foreach($msgsdata  as $item) {  ?>
            <tr>
                <td><?php echo $item -> id; ?></td>
                <td><?php echo $item -> title; ?></td>
                <td><?php echo $item -> created_at; ?></td>
                <td><?php echo $item -> updated_at; ?></td>
            </tr>

        <?php }  ?>
    
    </table>
</body>
</html>