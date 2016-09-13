<?php
    if (empty($viewBag) ) echo 'WRONG DATA';

     foreach ($viewBag as $value){
    echo '

            <div class="well">

                <div class="row">

                  <div class="col-md-4">
                    <p>Имя пользователя:</p>
                  </div>

                  <div class="col-md-4">
                    <p>'.$value.'</p>
                  </div>

                </div>
                
                <div class="row">
                  <div class="col-md-4">
                    <p>Картинка:</p>
                  </div>

                  <div class="col-md-4">
                    <p></p>
                  </div>
                </div>

                  <div class="col-md-offset-9 ">
                     <a href="">Редактировать</a>
                  </div>
                  
                  <div class="col-md-offset-9 ">
                   <a href="">Удалить картинку</a>
                  </div>

            </div>

            ';

} ?>

