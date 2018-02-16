<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Студенты</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
</head>
<body>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Список новых студентов</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Добавить новую запись</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Список студентов:</h3>

            <div class="records_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Добавить новую запись</h4>
            </div>

            <div class="modal-body">

                <div class="form-group">
                    <label for="fio">ФИО</label>
                    <input type="text" id="fio" placeholder="ФИО" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="data">Дата рождения</label>
                    <input type="text" id="data" placeholder="Дата рождения" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="text" id="email" placeholder="Email" class="form-control"/>
                </div>

                  <div class="form-group">
                    <label for="phone">Телефон </label>
                    <input type="text" id="phone" placeholder="Телефон" class="form-control"/>
                </div>
        
                <div class="form-group">
                    <label for="city">Город </label>
                    <input type="text" id="city" placeholder="Город" class="form-control"/>
                </div>

                 <div class="form-group">
                    <label for="fakulty">Факультет </label>
                    <input type="text" id="fakulty" placeholder="Факультет" class="form-control"/>
                </div>

                  <div class="form-group">
                    <label for="spec">Специальность </label>
                    <input type="text" id="spec" placeholder="Специальность" class="form-control"/>
                </div>
            </div>




            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Добавить запись</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Обновить</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_fio">ФИО</label>
                    <input type="text" id="update_fio" placeholder="ФИО" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_data">Дата рождения</label>
                    <input type="text" id="update_data" placeholder="Дата рождения" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Email </label>
                    <input type="text" id="update_email" placeholder="Email" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_phone">Телефон</label>
                    <input type="text" id="update_phone" placeholder="Телефон" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_city">Город</label>
                    <input type="text" id="update_city" placeholder="Город" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_fakulty">Факультет</label>
                    <input type="text" id="update_fakulty" placeholder="Факультет" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_spec">Специльность</label>
                    <input type="text" id="update_spec" placeholder="Специальность" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Сохранить</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
