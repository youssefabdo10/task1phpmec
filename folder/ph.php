<?php
//يوسف عبدالنبي سيد

//Problem 1
$name="programmer";
echo "Hello ,".$name;

echo"<br>"."<br>";

//Problem2
$X=5;
$Y=10;
echo "X + Y =".$X+$Y. "<br>" ;
echo "X - Y =".$X-$Y ."<br>";
echo "X * Y =".$X*$Y ."<br>";

echo"<br>"."<br>";


//Problem3
$A=1;
$B=2;
$C=3;
$D=4;
$X=($A*$B)-($C*$D);
echo $X . "<br>";

echo"<br>"."<br>";


//Problem4
$N=12;
$M=13;
echo ($N%10 + $M%10)."<br>";


echo"<br>"."<br>";


//Problem5
$x=4569;
if($x%2==0){
echo "$x is EVEN". "<br>";
}else{
  echo "$x is ODD". "<br>";
}


echo"<br>"."<br>";


//Problem6




echo"<br>"."<br>";


//Problem7
$lucky=65;
if((($lucky/10) % ($lucky%10))==0 || (($lucky%10) % ($lucky/10))==0){
  echo "lucky". "<br>";
}else{
  echo "Not lucky". "<br>";
}