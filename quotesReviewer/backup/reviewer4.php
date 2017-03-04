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
				$total+=$price[$j];
        }
		
		 $items=$_POST['itemCount'];
		 echo $items;
		 $items-=$snum;
		 echo $items;
		 for($i=1;$i<=$items;$i++){
                $desc="itemDesc"."$i";
                $prc="itemPrice"."$i";
                $itemDesc=$_POST[$desc];
                $itemPrice=$_POST[$prc];
				$total+=$itemPrice;
				echo $itemDesc;
				echo $itemPrice;
				$_SESSION['controller']->addLineItems($quote_id, $itemDesc, $itemPrice);
		 }
		 $_SESSION['controller']->updateTotal($quote_id, $total);
		 
		 
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
