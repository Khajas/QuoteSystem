<?php
include("controller2.php");

        $quote_id=$_POST['quoteid'];
        $_SESSION['controller']=new quoteReviewer();
    $temp=$_SESSION['controller']->listItems($quote_id);
    $snum=sizeof($temp);
        for($i=1,$j=0;$i<=$snum;$i++,$j++)
        {
                $var1="line$i";
                $var2="price$i";
                $line[$j]=$_POST[$var1];
                $price[$j]=$_POST[$var2];
        }
		
		 for($i=0;$i<10;$i++)
		 {
			 $var1='mytext['.$i.']';
			 echo $var1;
			 $var2='myprice['.$i.']';
			$newline[$i]=$_POST[$var1];
			echo "post part is $_POST[$var1]";
		    $newprice[$i]=$_POST[$var2];
		 }
		 echo sizeof($newline);
		 for($i=0;$i<10;$i++)
		 {
			echo $newline[$i];
		 }
		
        $notes=$_POST['notes'];
        $disc=$_POST['disc'];
        $a=$_SESSION['controller']->updateQuote($quote_id, $disc,Constants::UPDATE_DISCOUNT);
        $b=$_SESSION['controller']->updateQuote($quote_id, $notes,Constants::UPDATE_NOTES);
        $k=0;
        foreach($temp as $var)
        {
         $lid=$var['l_id'];
         $c=$_SESSION['controller']->updateQuote($lid,$line[$k],Constants::UPDATE_LINE_ITEMS);
         $d=$_SESSION['controller']->updateQuote($lid,$price[$k],Constants::UPDATE_PRICE);
         if($k<sizeof($temp))
          {
           $k++;
          }
         }

     



?>
