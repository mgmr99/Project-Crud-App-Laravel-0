<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="bg-dark py-3">
        <div class="container">
            <div class="h4 text-white text-center">Employees Crud</div>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-between py-3">
            <div class="h4">Create Employee</div>
            <div>
                <a href="{{ route('employees.index') }}" class="btn btn-danger">Back</a>
            </div>
        </div>

        <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card border-0 shadow-lg ">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email"class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address"class="form-label">Address</label>
                    <textarea name="address" id="address" cols="30" rows="4" placeholder="Enter your address" class="form-control" value="{{ old('message') }}"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image"class="form-label"></label>
                    <input type="file" name="image" class="@error('image') is-invalid @enderror"  alt="">
                    @error('image')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save Employee</button>
        </form>
    </div>
</body>
</html>