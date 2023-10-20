<?php
for($i=1;$i<=5;$i++){
    for($a=1;$a<=5;$a++){
        echo "●";
}
    echo "<br>";
}


/*
for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $i."FizzBuzz";
  } else if ($i % 3 == 0) {
    echo $i."Fizz";
  } else if ($i % 5 == 0) {
    echo $i."Buzz";
  } else {
    echo $i;
  }
  echo "<br>";
}
echo "<br>";

for($i = 1; $i <= 50; $i++){
    if($i %3 == 0){
        if($i %5 == 0){
            echo "FizzBuzz<br>";
        }else{
            echo "Fizz<br>";
        }
    
    }elseif ($i %5 == 0) {
        echo "Buzz<br>";
    }else{
        echo $i."<br>";
}
}
*/