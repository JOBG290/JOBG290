<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>


<?php
    $n = 30;
    $sum = 0;
    $prod = 1;
    for($i=1; $i<$n; $i++)
    {
     $prod+=($i+1);       
    }
    echo "1부터 30 까지의 합은 $n = $prod<br>"."\n";
    for($i=1; $i<$n; $i++)
    {
        $prod*=($i+1);       
    }
    echo "1부터 30 까지의 곱은 $n = $prod<br>"."\n";
?> 


</body>
</html>