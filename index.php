<?php
/* Basics */
require_once 'config/main.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/screen.css">
    <title><?php echo $config['interface']['title']; ?></title>
</head>
<body>
<div id="header">
    <div id="logo"><?php echo $config['interface']['logo']; ?></div>
    <p><?php echo $config['interface']['welcome']; ?></p>
</div>
<div id="assessment">
    <?php
    require_once 'config/main.php';
    require_once 'config/data.php';

    /* Data acquisition */
    $assessments = ['?'];
    ?>
    <table class="assessment">
        <thead>
        <tr>
            <th>Subject</th>
            <th>Code</th>
            <th>Assessment</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        <?php
        /* Data presentation */
        foreach ($assessments as $assessment) {
            ?>
            <tr>
                <td>?</td>
                <td>?</td>
                <td>?</td>
                <td>?</td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
