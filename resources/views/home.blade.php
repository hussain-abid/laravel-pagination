<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <style>
        .pagination{
            float: right;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container mt-5">

    <h1 class="text-center">All the Articles</h1>

    <div class="row mt-5">
        @foreach($articles as $each_article)
            <div class="col-lg-4">
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title">{{$each_article->title}}</h5>
                        <p class="card-text">{{$each_article->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {!! $articles->links() !!}
</div>

</body>
</html>
