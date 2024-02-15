@extends('layouts.main')

@section('container')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('jasas.create') }}" class="btn btn-md btn-success mb-3">Insert Jasa</a>
                        <div class="table-responsive">
                                <table class="table" border="0">
                                    <thead>
                                        <td class="">Name</td>
                                        <td class="">Condition</td>
                                        <td class="">Benefit</td>
                                        <td class="">Price</td>
                                        <td class="">Menu</td>
                                    </thead>
                                    <tbody>
                                    @forelse ($jasas as $jasa)
                                        <tr>

                                            <td class="text-left">{{ $jasa->name }}</td>
                                            <td class="text-left">{{ $jasa->condition }}</td>
                                            <td class="text-left">{{ $jasa->benefit }}</td>
                                            <td class="text-left">{{ $jasa->price }}</td>

                                            <td class="text-left">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jasas.destroy', $jasa->id) }}" method="POST">

                                                    <a href="{{ route('jasas.edit', $jasa->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Jasa belum Tersedia.
                                        </div>
                                    @endforelse
                                    </tbody>
                                </table>
                        </div>

                    </div>
                    {{--  {{ $countrys->links() }}  --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>
@endsection
