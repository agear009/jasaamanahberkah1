@extends('layouts.main')
    @section('container')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('abouts.create') }}" class="btn btn-md btn-success mb-3">Insert About</a>
                        <div class="table-responsive">
                                <table class="table" border="0" >
                                    <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Menu</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($Abouts as $About)
                                        <tr>
                                            <td class="text-left">
                                                <img src="{{ asset('/storage/Abouts/'.$About->image) }}" class="rounded" style="width: 150px">
                                            </td>
                                            <td>{{ $About->title }}</td>
                                            <td>{!! $About->content !!}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('abouts.destroy', $About->id) }}" method="POST">
                                                    <a href="{{ route('abouts.show', $About->id) }}" class="btn btn-sm btn-dark">Show</a>
                                                    <a href="{{ route('abouts.edit', $About->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data About Empty.
                                        </div>
                                    @endforelse
                                    </tbody>
                                </table>
                        </div>
                          {{--  {{ $Abouts->links() }}  --}}
                    </div>
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
