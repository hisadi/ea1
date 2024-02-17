<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="col-6 mb-3 mt-3">
        <div class="card" style="width: 18rem;">
            @if ($waifu->image)
                <img src="{{ asset('/storage/images/'.$waifu->image) }}" class="card-img-top" alt="...">
            @else
                 <h1>No Image</h1>
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $waifu->title }}</h5>
              <p class="card-text">{{ $waifu->author }}</p>
            </div>
        </div>
    </div>
</body>
</html>
