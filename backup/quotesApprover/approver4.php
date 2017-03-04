<?php
include("QAController.php");
        $quote=$_POST['quote_id'];
        echo $quote;
        $disc=$_POST['disc'];
        $a= new QuoteStore();
        $temp=$a->updateQuote($disc,$quote);
        // $a->updateQuote($disc,$quote);
?>
