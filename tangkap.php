<?php
    echo $_GET['v1'];
    echo "<br />";
    echo $_GET['v2'];
?>

<fieldset id="ini">
    <label for="ini">DATA</label>
    <form method="POST" action="proses.php">
         <p>Nama : <input type="text" name="nama"></p>
        <p>Alamat : <input type="text" name="alamat"></p>
        <p><input type="submit" value="Proses" name="submit"></p>
    </form>
</fieldset>

