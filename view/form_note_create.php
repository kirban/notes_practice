<!-- CONTENT -->
<?php
require "../model/Database.php";
require "../model/Category.php";
$Category = new Category();
?>
<div class="zametka">
    <div class="row heading">

        <form action="../controller/add.php" method="post" class="form-horizontal col-md-offset-1 col-lg-offset-1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h4>Категория: </h4>
            <select name="category_name">
                <?php $list = $Category->returnListOptions(NULL); ?>
            </select>
            <h4>Заголовок:</h4><div class="setTitle form-group"><h3><input type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-8" name="new_title"></h3></div>
            <h4>Текст:</h4><div class="setText form-group" > <textarea class="col-xs-12 col-sm-12 col-md-12 col-lg-8" rows="9" name="new_text"></textarea></div>
            <button type="submit" class="btn btn-success"><span class="glyphicons glyphicon-save"></span>Сохранить</button>
            <button type="reset" class="btn btn-default"><span class="glyphicons glyphicons-edit"></span>Сбросить</button>
        </form>



    </div>


</div>
</div>
</div>
<!-- CONTENT -->