<!doctype html>
<html lang="RU-ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
</head>
<body>


<div class="row">

<div class="col-md-12">
  <div class="well" style="margin-top: 0%; background-color:lightgrey">
        <h4 style="text-align: center;">Регистрация новых участников</h4>
        <form role="form" id="contactForm"  class="shake" action="sendregistration/send_reg" method="POST" enctype="multipart/form-data">
            <!-- Имя -->
            <div class="row">
                <div class="form-group col-sm-12">
                    <label for="name" class="h4">Имя</label>
                    <input name="user_name" type="text" class="form-control" id="name" placeholder="Введите свое имя" data-error="Забыли как вас зовут?" required pattern="^[А-Яа-яЁё\s]+$">
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <!--Возраст-->
            <div class="row">
                <div class="form-group col-sm-12">
                    <label for="age" class="h4">Возраст</label>
                    <input name="user_age" type="text" class="form-control" id="age" placeholder="Введите ваш возраст" data-error="Забыли сколько вам лет?" required pattern="^[ 0-9]+$" >
                    <div class="help-block with-errors"></div>
                </div>
            </div>

            <!--Картинка-->
            <div class="row">
                <div class="form-group col-sm-12">
                    <label for="fileToUpload" class="h4">Загрузить фотографию</label>
            <input type="file" class="file" name="fileToUpload" id="fileToUpload">
                </div>
            </div>

            <!-- О себе -->
            <div class="row">
            <div class="form-group col-sm-12">
                <label for="message" class="h4">О себе</label>
                <textarea name="user_message" id="message" class="form-control" rows="5" placeholder="Напишите немного о себе"  data-error="Необходимо написть хоть что-нибудь" required></textarea>
            </div>
            </div>

            <!--Кнопка-->
            <div class="row">
                <div class="form-group col-sm-12 col-sm-offset-0">
                    <input type="submit" class="col-xs-12 btn btn-md btn-success" value="Зарегистрироваться" name="">
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
    </div>