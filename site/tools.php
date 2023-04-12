<?php
    require 'database.php';

    $sql = "SELECT * FROM tools";
    
    $result = mysqli_query($conn,$sql);

    $tools = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <table>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>category</th>
            <th>price</th>
            <th>brand</th>
        </tr>
        <?php foreach ($tools as $tool) : ?>
            <tr>
                <td><?php echo $tool['tool_id']?></td>           
        
                <td><?php echo $tool['tool_name']?></td>
            
                <td><?php echo $tool['tool_category']?></td>
            
                <td><?php echo $tool['tool_price']?></td>
            
                <td><?php echo $tool['tool_brand']?></td>
            </tr>
        <?php endforeach; ?>  
    </table>
</body>
</html>