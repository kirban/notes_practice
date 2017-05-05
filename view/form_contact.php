<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 11.04.2017
 * Time: 19:36
 */
$title = "Cвязь";
$toptitle = "Форма связи";
require ("../view/top_template.php");

?>
          <!-- Содержимое контейнера -->
          <div class="panel-body">
 
            <!-- Сообщение, отображаемое в случае успешной отправки данных -->
            <div class="alert alert-success hidden" role="alert" id="successMessage">
              <strong>Внимание!</strong> Ваше сообщение успешно отправлено.
            </div>
 
            <!-- Форма обратной связи -->
            <form id="contactForm">
              <div class="row">
 
                
                <div id="error" class="col-sm-12" style="color: #ff0000; margin-top: 5px; margin-bottom: 5px;"></div>
                
                <!-- Имя и email пользователя -->                
                <div class="col-sm-6">
                  <!-- Имя пользователя -->
                  <div class="form-group has-feedback">
                    <label for="name" class="control-label">Введите ваше имя:</label>
                    <input type="text" id="name" name="name" class="form-control" required="required" value="" placeholder="Например, Иван Иванович" minlength="2" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- Email пользователя -->
                  <div class="form-group has-feedback">
                    <label for="email" class="control-label">Введите адрес email:</label>
                    <input type="email" id="email" name="email" class="form-control" required="required"  value="" placeholder="Например, ivan@mail.ru" maxlength="30">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>
              </div>
 
              <!-- Сообщение пользователя -->
              <div class="form-group has-feedback">
                <label for="message" class="control-label">Введите сообщение:</label>
                <textarea id="message" class="form-control" rows="3" placeholder="Введите сообщение от 20 до 500 символов" minlength="20" maxlength="500" required="required"></textarea>
              </div>
 
              <hr>
              
              <!-- Кнопка, отправляющая форму -->  
              <button type="submit" class="btn btn-primary pull-right">Отправить сообщение</button>
            </form><!-- Конец формы -->
 
          </div>
        </div><!-- Конец контейнера -->

<?php
require ("../view/bottom_template.php");