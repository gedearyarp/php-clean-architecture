<?php
function notes($note_id, $title, $create_timestamp, $content) { 
    echo('    
    <h2>' . $title . '</h2>
    <div class="ui container">
        <p class="item">Created on: ' . $create_timestamp . '</p>
        <form class="ui item right aligned" method="POST" action="/user/delete_note">
            <i class="right large pencil alternate link icon"></i>
            <button class="transparent" type="submit" name="note_id" value="' . $note_id . '">
            <i class="right large red trash alternate link icon"></i></button>
        </form>
    </div>
    <div class="ui divider"></div>
    <p>' . $content . '</p>
    <div class="ui divider"></div>
    ');
}
?>