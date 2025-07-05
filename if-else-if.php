<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-else-if </title>
</head>
<body>
    <?php
    $marks=69;
    if($marks<33){
        echo "fail";
    }
    else if ($marks>=34 && $marks<50){
        echo "D grade";
    }
    else if($maeks>=50 && $marks<65){
        echo "C grade";
    }
    else if($maeks>=65 && $marks<80){
        echo "B grade";
    }
    
    else if($maeks>=80 && $marks<90){
        echo "A grade";
    }
    
    else if($maeks>=50 && $marks<65){
        echo "A+ grade";
    }
else {
    echo "invalid input";
}
?>
</body>
</html>