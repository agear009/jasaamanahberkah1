@extends('layouts.main')

@section('container')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('trackers.update',$tracker->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('put')

                            <div class="form-group">

                                <label class="font-weight-bold">Code</label>
                                <input type="text" class="form-control @error('cost') is-invalid @enderror" name="code" value="{{ $tracker->code }}" placeholder="insert code" required>

                                <!-- error message untuk title -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Name</label>
                                <input type="text" class="form-control @error('cost') is-invalid @enderror" name="name" value="{{ $tracker->name }}" placeholder="insert name" required>

                                <!-- error message untuk title -->
                                @error('price')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <p><label for="w3review">Name Order</label></p>
                                <select  class="form-control @error('name_order') is-invalid @enderror"  placeholder="Please insert " name="name_order"  value="{{ $tracker->jasa_id }}" required>
                                    <option name="name_order" value="{{$tracker->name_order }}">{{ $tracker->name_order }}{{ $tracker->jasa_name }}</option>
                                    @forelse($Jasa as $jasa)
                                    <option name="name_order" value="{{ $jasa->id }}">{{ $jasa->name }}</option>
                                    @empty
                                    <option name="name_order" value="">Tidak ada Data</option>
                                    @endforelse

                                </select>
                                <!-- error message untuk title -->
                                @error('condition')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">Persyaratan Yang diterima:</label></p>
                                <input type="text" class="form-control @error('condition') is-invalid @enderror"  placeholder="Please insert "  name="condition"  value="{{ $tracker->condition }}" required>

                                <!-- error message untuk title -->
                                @error('condition')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <p><label for="w3review">Permasalahan :</label></p>
                                <input type="text" class="form-control @error('constraint') is-invalid @enderror"  placeholder="Please insert "  name="constraint"  value="{{ $tracker->constraint }}" required>

                                <!-- error message untuk title -->
                                @error('constraint')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status1') is-invalid @enderror"  placeholder="Please insert " name="status1" value="{{ $tracker->status1 }}" required>

                                <!-- error message untuk title -->
                                @error('status1')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status2') is-invalid @enderror"  placeholder="Please insert " name="status2"  value="{{ $tracker->status2 }}" required>

                                <!-- error message untuk title -->
                                @error('status2')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status3') is-invalid @enderror"  placeholder="Please insert " name="status3" value="{{ $tracker->status3 }}" required>

                                <!-- error message untuk title -->
                                @error('status3')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status4') is-invalid @enderror"  placeholder="Please insert " name="status4"  value="{{ $tracker->status4 }}" required>

                                <!-- error message untuk title -->
                                @error('status4')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status5') is-invalid @enderror"  placeholder="Please insert " name="status5" value="{{ $tracker->status5 }}" required>

                                <!-- error message untuk title -->
                                @error('status5')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status6') is-invalid @enderror"  placeholder="Please insert " name="status6"  value="{{ $tracker->status6 }}" required>

                                <!-- error message untuk title -->
                                @error('status6')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status7') is-invalid @enderror"  placeholder="Please insert " name="status7"  value="{{ $tracker->status7 }}" required>

                                <!-- error message untuk title -->
                                @error('status7')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status8') is-invalid @enderror"  placeholder="Please insert " name="status8"  value="{{ $tracker->status8 }}" required>

                                <!-- error message untuk title -->
                                @error('status8')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status9') is-invalid @enderror"  placeholder="Please insert " name="status9"  value="{{ $tracker->status9 }}" required>

                                <!-- error message untuk title -->
                                @error('status9')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input type="hidden" class="form-control @error('status10') is-invalid @enderror"  placeholder="Please insert " name="status10"  value="{{ $tracker->status10 }}" required>

                                <!-- error message untuk title -->
                                @error('status10')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <button type="submit" class="btn btn-md btn-primary">Start the Process</button>
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
