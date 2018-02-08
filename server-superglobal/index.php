<?php include 'server-info.php';?>
<!DOCTYPE html>
<html>

<head>
    <title>System Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Server Information</h1>
        <?php if($server): ?>
        <ul class="list-goup">
            <?php foreach($server as $key => $value): ?>
            <li class="list-group-item">
                <strong><?php echo $key; ?>: </strong>
                <?php echo $value;?>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        
        <h1>Client Information</h1>
        <?php if($client): ?>
        <ul class="list-goup">
            <?php foreach($client as $key => $value): ?>
            <li class="list-group-item">
                <strong><?php echo $key; ?>: </strong>
                <?php echo $value;?>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

    </div>
</body>


</html>
