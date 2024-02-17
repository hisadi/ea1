<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    Add Waifu


    <form action="/store-waifu" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex flex-column align-items-center pt-3 gap-3">
            <div class="form-group col-4">
                <label for="">Title</label>
                <input type="text" class="form-control @error ('title') is-invalid @enderror" placeholder="Enter Book title" name="title" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="">Description</label>
                <input type="text" class="form-control @error ('description') is-invalid @enderror" placeholder="Enter Book description" name="description" value="{{ old('description') }}">
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="">Author</label>
                <input type="text" class="form-control @error ('author') is-invalid @enderror" placeholder="Enter Book author" name="author" value="{{ old('author') }}">
                @error('author')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="">Date</label>
                <input type="date" class="form-control @error ('date') is-invalid @enderror" placeholder="Enter Book date" name="date" value="{{ old('date') }}">
                @error('date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group col-4">
                <label for="">Image</label>
                <input type="file" class="form-control @error ('image') is-invalid @enderror" placeholder="Enter Book image" name="image" value="{{ old('image') }}">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>
