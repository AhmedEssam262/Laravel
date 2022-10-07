<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create offers</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background-color:brown">
    <form style="padding: 20px" method="POST" action="{{route('offer.store')}}">
        @csrf
        @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    @endforeach
        @endif
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4" style="color: aliceblue" >Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}"  placeholder="Name">
                    @error('name')
                    <div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
                        <i class="bi-exclamation-triangle-fill"></i>
                      <strong class="mx-2">Warning!</strong> {{ $error }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  </div>
                    @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="color: aliceblue">ID</label>
            <input type="number" class="form-control" name="id" value="{{ old('id') }}"   placeholder="id...">
            @error('id')
            <div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
                <i class="bi-exclamation-triangle-fill"></i>
              <strong class="mx-2">Warning!</strong> {{ $error }}
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
            @enderror
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress" style="color: aliceblue">Brand</label>
          <input type="text" class="form-control" name="brand" value="{{ old('brand') }}" placeholder="brand....">
          @error('Brand')
          <div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
              <i class="bi-exclamation-triangle-fill"></i>
            <strong class="mx-2">Warning!</strong> {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputAddress2" style="color: aliceblue">Price</label>
          <input type="number" class="form-control" name="price" value="{{ old('price') }}">
          @error('price')
          <div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
              <i class="bi-exclamation-triangle-fill"></i>
            <strong class="mx-2">Warning!</strong> {{ $error }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
          @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity" style="color: aliceblue">Discount</label>
            <input type="number" class="form-control" name="discount" value="{{ old('discount') }}">
            @error('Discount')
            <div class="alert alert-warning alert-dismissible d-flex align-items-center fade show">
                <i class="bi-exclamation-triangle-fill"></i>
              <strong class="mx-2">Warning!</strong> {{ $error }}
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>
