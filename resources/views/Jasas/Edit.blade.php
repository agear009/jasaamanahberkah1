@extends('layouts.main')

@section('container')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('jasas.update',$jasa->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('cost') is-invalid @enderror" name="name" value="{{ $jasa->name }}" placeholder="insert Name" required>

                                <!-- error message untuk title -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Harga</label>
                                <input type="number" class="form-control @error('cost') is-invalid @enderror" name="price"  placeholder="insert Price" value="{{ $jasa->price }}" required>

                                <!-- error message untuk title -->
                                @error('price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <p><label for="w3review">Persyaratan:</label></p>
                                <input type="text" class="form-control @error('condition') is-invalid @enderror"  placeholder="Please insert " name="condition" value="{{ $jasa->condition }}" required>

                                <!-- error message untuk title -->
                                @error('condition')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">Mendapatkan:</label></p>
                                <input type="text" class="form-control @error('benefit') is-invalid @enderror"  placeholder="Please insert "  name="benefit"  value="{{ $jasa->benefit }}" required>

                                <!-- error message untuk title -->
                                @error('benefit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Pertama:</label></p>
                                <input type="text" class="form-control @error('process1') is-invalid @enderror"  placeholder="Please insert "  name="process1"  value="{{ $jasa->process1 }}" required>

                                <!-- error message untuk title -->
                                @error('process1')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <p><label for="w3review">process Kedua:</label></p>
                                <input type="text" class="form-control @error('process2') is-invalid @enderror"  placeholder="Please insert "  name="process2" value="{{ $jasa->process2 }}" required>

                                <!-- error message untuk title -->
                                @error('process2')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Ketiga:</label></p>
                                <input type="text" class="form-control @error('process3') is-invalid @enderror"  placeholder="Please insert " name="process3"  value="{{ $jasa->process3 }}" required>

                                <!-- error message untuk title -->
                                @error('process3')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Keempat:</label></p>
                                <input type="text" class="form-control @error('process4') is-invalid @enderror"  placeholder="Please insert " name="process4"  value="{{ $jasa->process4 }}" required>

                                <!-- error message untuk title -->
                                @error('process4')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Kelima:</label></p>
                                <input type="text" class="form-control @error('process5') is-invalid @enderror"  placeholder="Please insert " name="process5"  value="{{ $jasa->process5 }}" required>

                                <!-- error message untuk title -->
                                @error('process5')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Keenam:</label></p>
                                <input type="text" class="form-control @error('process6') is-invalid @enderror"  placeholder="Please insert " name="process6"  value="{{ $jasa->process6 }}" required>

                                <!-- error message untuk title -->
                                @error('process6')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Ketujuh:</label></p>
                                <input type="text" class="form-control @error('process7') is-invalid @enderror"  placeholder="Please insert " name="process7"  value="{{ $jasa->process7 }}" required>

                                <!-- error message untuk title -->
                                @error('process7')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Kedelapan:</label></p>
                                <input type="text" class="form-control @error('process8') is-invalid @enderror"  placeholder="Please insert " name="process8"  value="{{ $jasa->process8 }}" required>

                                <!-- error message untuk title -->
                                @error('process8')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Kesembilan:</label></p>
                                <input type="text" class="form-control @error('process9') is-invalid @enderror"  placeholder="Please insert " name="process9"  value="{{ $jasa->process9 }}" required>

                                <!-- error message untuk title -->
                                @error('process9')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">process Terakhir:</label></p>
                                <input type="text" class="form-control @error('process10') is-invalid @enderror"  placeholder="Please insert " name="process10"  value="{{ $jasa->process10 }}" required>

                                <!-- error message untuk title -->
                                @error('process10')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
