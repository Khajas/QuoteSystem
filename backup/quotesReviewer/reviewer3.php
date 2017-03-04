<?php
include("controller2.php");
$quote_id=$_GET['quote'];
$_SESSION['controller']=new quoteReviewer();

$quote=$_SESSION['controller']->getQuote($quote_id);
$line=$_SESSION['controller']->listItems($quote_id);

echo'<form action="../reviewer4.php" method="post">';
foreach($quote as $var)
{
	echo'<input type="hidden" name="quoteid" value="'.$var['quote_id'].'">';
	echo'loop';
}
echo'<table>';
foreach($quote as $var)
{
echo'<tr><td>Quote ID:</td><td>'.$var['quote_id'].'</td></tr>';
echo'<tr><td>Sales Assisciate ID:</td><td>'.$var['saoc_id'].'</td></tr>';
echo'<tr><td>Date:</td><td>'.$var['date'].'</td></tr>';
echo'<tr><td>Email: </td><td>'.$var['email'].'</td></tr>';
}
echo'</table>';
echo'<table>';
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<script>
$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" name="mytext[]"/> <input type="text" name="myprice[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<?php
$snum=1;
foreach($line as $car)
{
 	echo'<tr><td><input type=text name="line'.$snum.'" value="'.$car['descrptn'].'"></td><td><input type=text name="price'.$snum.'" value="'.$car['price'].'"></td></tr>';
	$snum++;
}
echo'<div class="input_fields_wrap">
    <button class="add_field_button">Add More Fields</button>
    <div><input type="text" name="mytext[]">
	<input type="text" name="myprice[]"></div>
</div>';

foreach($quote as $var)
{
	echo'<tr><td>Secret Notes:</td><td><input type=text name=notes value="'.$var['notes'].'"></td></tr>';
}
echo'<tr><td>Discount</td><td><input type=text name="disc" value="'.$var['disc'].'"></td></tr>';
echo'</table>';
echo'<input type="submit" value="Insert">';

echo'</form>';
?>