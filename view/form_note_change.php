
<!-- CONTENT -->
<div class="zametka">
    <div class="row heading">
        <form action="../controller/change.php" method="post" class="col-lg-9 col-md-11 col-sm-11 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
            <h4>Категория: </h4>
            <select class="form-control" name="new_catName" style="width: auto;">
                <option disabled>Выберите категорию:</option>
               <option selected value="<?php echo $cat_name ?>"><?php echo $cat_name;?></option>
                <?php $Category->returnListOptions($cat_name);?>
            </select>
            <h4>Заголовок:</h4><div class="setTitle form-group"><h3><input type="text" class="form-control" value="<?php echo $note_title; ?>" name="new_title"></h3></div>
            <h4>Текст:</h4><div class="setText form-group" > <textarea class="form-control" rows="9" name="new_text"><?php echo $note_text; ?></textarea></div>
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"> Сохранить</span></button>
            <button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-trash"> Сбросить</span></button>
        </form>



    </div>


</div>
</div>
</div>
<!-- CONTENT -->

