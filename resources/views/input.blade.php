<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tebak-tebakan Berhadiah</title>
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Binatang yang hinggap di makanan?</h3>
                            <br/>

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                            <form action="/proses" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="form-group">
									<label for="nama">Nama</label>
									<input class="form-control" type="text" name="nama" value="{{ old('nama') }}" class="@error('nama') is-invalid @enderror">
									@error('nama')
											<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="form-group">
									   <label for="alamat">Alamat</label>
									   <input class="form-control" type="text" name="alamat" value="{{ old('alamat') }}" class="@error('alamat') is-invalid @enderror">
										@error('alamat')
												 <div class="alert alert-danger">{{ $message }}</div>
										@enderror
								</div>
								<div class="form-group">
									   <label for="usia">Usia</label>
									   <input class="form-control" type="text" name="usia" value="{{ old('usia') }}" class="@error('usia') is-invalid @enderror">
									   @error('usia')
												  <div class="alert alert-danger">{{ $message }}</div>
									   @enderror
								</div>
								<div class="form-group">
									   <label for="jawaban">Jawaban</label>
									   <input class="form-control" type="text" name="jawaban" value="{{ old('jawaban') }}" class="@error('jawaban') is-invalid @enderror">
										@error('jawaban')
												 <div class="alert alert-danger">{{ $message }}</div>
										@enderror
								</div>
								<div class="form-group">
									   <label for="yakin">Seberapa yakin dengan jawaban anda?</label>
									   <input class="form-control" type="text" name="yakin" value="{{ old('yakin') }}" class="@error('yakin') is-invalid @enderror">
									   @error('yakin')
												  <div class="alert alert-danger">{{ $message }}</div>
									   @enderror
								</div>
								<div class="form-group">
								  <label for="gambar" class="form-label">Foto Diri</label>
								  <input class="form-control" type="file" id="gambar" name="gambar" value="{{ old('gambar') }}" class="@error('gambar') is-invalid @enderror"}}>
									   @error('gambar')
												  <div class="alert alert-danger">{{ $message }}</div>
									   @enderror
								</div>
								<div class="form-group">
									<input class="btn btn-primary" type="submit" value="Proses">
								</div>
							</form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</body>
</html>