<?php
    $data = $_GET['datavalue'];

    $a = array('naogaon', 'chapainobabgong');

    $b = array('naraongong', 'norshindi');

    $c = array('ranggamati', 'cox\'s bazar');

    if($data == 'Rajshahi')
    {
        foreach ($a as $aone)
        {
            echo "<option> $aone </option>>";
        }
    }

    if($data == 'Dhaka')
    {
        foreach ($b as $bone)
        {
            echo "<option> $bone </option>>";
        }
    }

    if($data == 'Chattogram')
    {
        foreach ($c as $cone)
        {
            echo "<option> $cone </option>>";
        }
    }
?>