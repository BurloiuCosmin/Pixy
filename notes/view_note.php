
<?php
require_once "load.php";

$data = load_note($_GET['note_id']);

if( !empty( $data ) ) {
    echo "<h1><b>" . $data['title'] . "</b></h1>";
    echo "<p>" . $data['content'] . "</p><br>";
    echo "Crated at: " . date('Y/m/d H:i:s', $data['dateCreated']) . "<br>";
    echo "Modified at: " . date('Y/m/d H:i:s', $data['dateModified']);
} else {
    echo "nota inexistenta!";
}
?>
<br>
<br>
<br>
<a href="http://pixy.local/notes/" >Back <<<</a>