<?php 



?>



<form action="feldolgoz.php" method="POST">
<table border="2px">
<tr>
    <td>
    Tavolsag
    </td>
    <td>
    <input type="number" name="tavolsag" min="0">
    </td>
</tr>
<tr>
    <td>
    Jegy tipusa
    </td>
    <td>
        <select name="tipus">
        <option value="0.5">1. osztaly</option>
        <option value="1">2. osztaly</option>
        </select>
    </td>
</tr>
<tr>
    <td>
    Kedvezmeny
    </td>
    <td>
    <input type="radio" name="kedvezmeny" value="0.5">
    <label>50%-os kedvezmeny</label><br>
    <input type="radio" name="kedvezmeny" value="0.7">
    <label>70%-os kedvezmeny</label><br>
    <input type="radio" name="kedvezmeny" value="1" checked>
    <label>Nincs kedvezmeny</label><br>
    </td>
</tr>
<tr>
    <td colspan="2">
    <input type="submit" value="Lassuk"> 
    </td>
</tr>


</table>
</form>