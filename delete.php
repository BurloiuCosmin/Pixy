<?php
require_once 'load.php';

delete_note($_GET['note_id']);

function delete_note ($id)
{
    $delete = false;
    $notes = loadnotes();
    foreach ($notes as $key => $line) {
        if ($line['id'] == $id) {

            unset ($notes[$key]);
            $delete = true;

        }
    }

    if ($delete = false) {
        echo 'The specific note does not exist.';
    } else {
        echo 'Note has been successfully deleted!';
    file_put_contents(dirname(__FILE__) . '/saved/saved', json_encode($notes));
}
}

?>

<?php require_once 'header.php'; ?>
<br>
<br>
<br>

<a href="http://pixy.local/notes/view.php" >Back to notes</a>

<?php require_once 'footer.php';?>
