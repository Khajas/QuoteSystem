<?php

    echo "<form action='result2_2.php' method='post'>";
    $sql="SELECT * FROM quotes";
    $result = $conn->query($sql);
    echo "<label for='status'> status : </label>";
    echo "<select name='status' id='status' class='form-control'><option value=''>--Select--</option>";
    while(($row = $result->fetch())!=NULL)
    {
        echo "<option value='" . $row['status']. "</option>";
    }
    echo "</select> ";
    echo "<input type='submit' value='search' name='search'>";
    echo "</form>";

?>
