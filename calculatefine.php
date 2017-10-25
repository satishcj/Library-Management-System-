<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$_a = explode(" ",fgets($_fp));
$_b = explode(" ",fgets($_fp));

// Initialising variable
$_fine = "";

// Calling Function
calculateFine($_a,$_b);

// Defining Function
function calculateFine($actualDate, $returnDate) 
    { 

        // Checking various conditions

        if ($actualDate[0] <= $returnDate[0] && $actualDate[1] == $returnDate[1] && $actualDate[2] == $returnDate[2])  
            {
                $_fine = 0;
                echo $_fine;
            }
        elseif($actualDate[0] > $returnDate[0] && $actualDate[1] == $returnDate[1] && $actualDate[2] == $returnDate[2])
            {
                $_late = $actualDate[0] - $returnDate[0];
                $_fine = 15*$_late;
                echo $_fine;
            }
        elseif($actualDate[1] > $returnDate[1] && $actualDate[2] == $returnDate[2])
            {
                $_late = $actualDate[1] - $returnDate[1];
                $_fine = 500*$_late;
                echo $_fine;
            }
        elseif($actualDate[2] > $returnDate[2])     
            {
                $_fine = 10000;
                echo $_fine;
            }
        else 
            { 
                $_fine = 0;
                echo $fine;  // Updated (This is the undefined variable causing error )
            }
    }
?>