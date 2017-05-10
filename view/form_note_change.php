
<!-- CONTENT -->
<div class="zametka">
    <div class="row heading">
        <form action="../controller/change.php" method="post" class="form-horizontal col-md-offset-1 col-lg-offset-1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h4>Категория: </h4>
            <select name="new_catName">
                <option disabled>Выберите категорию:</option>
               <option selected value="<?php echo $cat_name ?>"><?php echo $cat_name;?></option>
                <?php $Category->returnListOptions($cat_name);?>
            </select>
            <h4>Заголовок:</h4><div class="setTitle form-group"><h3><input type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-8" value="<?php echo $note_title; ?>" name="new_title"></h3></div>
            <h4>Текст:</h4><div class="setText form-group" > <textarea class="col-xs-12 col-sm-12 col-md-12 col-lg-8" rows="9" name="new_text"><?php echo $note_text; ?></textarea></div>
            <button type="submit" class="btn btn-success"><span class="glyphicons glyphicon-save"></span>Сохранить</button>
            <button type="reset" class="btn btn-default"><span class="glyphicons glyphicons-edit"></span>Сбросить</button>
        </form>



    </div>


</div>
</div>
</div>
<!-- CONTENT -->

