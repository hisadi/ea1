<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- bootstrap JS --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

    @if (session ('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session ('delete'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @foreach ($waifus as $buku)
    <div class="col-6 mb-3 mt-3">
        <div class="card" style="width: 18rem;">
            @if ($buku->image)
                <img src="{{ asset('/storage/images/'.$buku->image) }}" class="card-img-top" alt="...">
            @else
                 <h1>No Image</h1>
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $buku->title }}</h5>
              <p class="card-text">{{ $buku->author }}</p>
              <div class="d-flex justify-content-center">
                <a href="/detail-waifu/{{$buku->id}}" class="btn btn-primary">Detail</a>
                <a href="/edit-waifu/{{ $buku->id }}" class="btn btn-primary">Edit</a>
                <form action="/delete-waifu/{{ $buku->id }}" method="POST" enctype="multipart/form-data" id="deleteForm{{  $buku->id }}">
                    @csrf
                    @method('delete')
                    <button type="button" onclick="confirmDelete ({{ $buku->id }})" class="btn btn-primary btn-sm" > Delete</button>
                </form>
              </div>
            </div>
        </div>
    </div>
    @endforeach
</body>

<script>
    function confirmDelete(bukuId) {
        var confirmation = confirm("Do you really wish to delete this book?");
        if (confirmation) {
            document.getElementById('deleteForm' + bukuId).submit();
        } else {
            return false;
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
