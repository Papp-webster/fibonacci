<?php

function fibonacciReverse($n)
{
    //A feltétel kigenerálja a 0-t és 1-et, mert azok a Fibonacci sorozat első két száma.
    if ($n == 0)
        return 0;    
    else if ($n == 1)
        return 1;    
      
    // Recursive hívás
    else
        return (fibonacciReverse($n-1) + fibonacciReverse($n-2));
}

$n = 5;

for ($counter = 0; $counter < $n; $counter++){  
    $fibonacci = fibonacciReverse($counter);

    echo $fibonacci . " ";
}
 
// Kiíratás fordított sorrendben
echo "<br>Fordított sorrend: ";

for ($counter = $n - 1; $counter >= 0; $counter--)
    {
        $fibonacci = fibonacciReverse($counter);
        
        echo $fibonacci . " ";
    }

?>