<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 11.04.2017
 * Time: 16:42
 */
$content=<<<CONTENT
<!-- CONTENT -->
<div class="zametka">
    <div class="row heading">

        <form action="../controller/change.php" method="post" class="form-horizontal col-lg-offset-1">
            <div class="setTitle form-group"><h3><input type="text" class="col-lg-4" value="$note_title" name="new_title"></h3></div>
            <div class="setText form-group" ><textarea class="col-lg-6" rows="9" name="new_text">$note_text</textarea></div>
            <button type="submit" class="btn btn-success"><span class="glyphicons glyphicon-save"></span>Сохранить</button>
            <button type="reset" class="btn btn-default"><span class="glyphicons glyphicons-edit"></span>Сбросить</button>
        </form>



    </div>


</div>
</div>
</div>
<!-- CONTENT -->
CONTENT;
