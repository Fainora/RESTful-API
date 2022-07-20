<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <h3>Добавить пост:</h3>
                <div class="form-group">
                    <label for="title">Название поста</label>
                    <input type="text" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="title">Содержимое</label>
                    <textarea name="body" class="form-control" id="body" rows="5" ></textarea>
                </div>
                <button class="btn btn-primary mt-2 mb-5" onclick="addPost()">Добавить пост</button>
            </div>
            <div class="col">
                <h3>Редактировать пост:</h3>
                <div class="form-group">
                    <label for="title">Название поста</label>
                    <input type="text" class="form-control" id="title-edit">
                </div>
                <div class="form-group">
                    <label for="title">Содержимое</label>
                    <textarea name="body" class="form-control" id="body-edit" rows="5" ></textarea>
                </div>
                <button class="btn btn-primary mt-2 mb-5" onclick="updatePost()">Сохранить</button>
            </div>
        </div>

        <div class="row post-list">
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>