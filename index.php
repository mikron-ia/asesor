<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config/main.php';
require_once __DIR__ . '/config/data.php';

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

    $museFactory = new Mikron\Asesor\Infrastructure\Factory\Muse();

    $muses = $museFactory->loadAllFromFiles($config['muses']);

    /* Data acquisition */
    foreach ($muses as $muse) {

        $assessments = ['?'];

        ?>
        <table class="assessment">
            <caption><?php echo $muse->getName(); ?></caption>
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
        <?php
    }
    ?>
</div>
</body>
</html>
