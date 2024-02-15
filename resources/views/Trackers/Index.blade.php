@extends('layouts.main')

@section('container')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('trackers.create') }}" class="btn btn-md btn-success mb-3">Insert Trackers</a>
                        <form class="d-flex" role="search" action="/trackers" method="get">
                            <div class="input-group mb-3">
                            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            </div>
                        </form>
                        <div class="table-responsive">
                                <table class="table" border="0">
                                    <thead>
                                        <td class="">Code</td>
                                        <td class="">Name</td>
                                        <td class="">Name Order</td>
                                        <td class="">Process</td>
                                        <td class="">Kendala</td>
                                        <td class=""></td>
                                        <td class="">Menu</td>
                                    </thead>
                                    <tbody>
                                    @forelse ($trackers as $tracker)
                                        <tr>

                                                <td class="text-left" width="15%">{{ $tracker->code }}</td>
                                                <td class="text-left" width="10%">{{ $tracker->name }}</td>
                                                <td class="text-left" width="15%">{{ $tracker->jasa_name }}</td>

                                                @if($tracker->status1=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process1 }}</td>
                                                @elseif($tracker->status2=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process2 }}</td>
                                                @elseif($tracker->status3=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process3 }}</td>
                                                @elseif($tracker->status4=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process4 }}</td>
                                                @elseif($tracker->status5=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process5 }}</td>
                                                @elseif($tracker->status6=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process6 }}</td>
                                                @elseif($tracker->status7=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process7 }}</td>
                                                @elseif($tracker->status8=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process8 }}</td>
                                                @elseif($tracker->status9=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process9 }}</td>
                                                @elseif($tracker->status10=='Process')
                                                <td class="text-left">{{ $tracker->jasa_process10 }}</td>


                                                @else
                                                    <td class="text-left">Tidak dalam proses apapun</td>

                                                @endif


                                            <td class="text-left" width="10%">
                                                <p>{{ $tracker->constraint }}</p>
                                            </td>
                                            <td class="text-left" width="10%">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('trackers.update', $tracker->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-sm btn-danger">Continue</button>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('cost') is-invalid @enderror" name="code" value="{{ $tracker->code }}" placeholder="insert code" required>

                                                    </div>
                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('cost') is-invalid @enderror" name="name" value="{{ $tracker->name }}" placeholder="insert name" required>

                                                    </div>
                                                    <div class="form-group">

                                                        <input type="hidden"  class="form-control @error('name_order') is-invalid @enderror"  placeholder="Please insert " name="name_order"  value="{{ $tracker->name_order }}" required>



                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('condition') is-invalid @enderror"  placeholder="Please insert "  name="condition"  value="{{ $tracker->condition }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status1') is-invalid @enderror"  placeholder="Please insert " name="status1" value="{{ $tracker->status1 }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status2') is-invalid @enderror"  placeholder="Please insert " name="status2"  value="{{ $tracker->status2 }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status3') is-invalid @enderror"  placeholder="Please insert " name="status3" value="{{ $tracker->status3 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status4') is-invalid @enderror"  placeholder="Please insert " name="status4"  value="{{ $tracker->status4 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status5') is-invalid @enderror"  placeholder="Please insert " name="status5" value="{{ $tracker->status5 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status6') is-invalid @enderror"  placeholder="Please insert " name="status6"  value="{{ $tracker->status6 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status7') is-invalid @enderror"  placeholder="Please insert " name="status7"  value="{{ $tracker->status7 }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status8') is-invalid @enderror"  placeholder="Please insert " name="status8"  value="{{ $tracker->status8 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status9') is-invalid @enderror"  placeholder="Please insert " name="status9"  value="{{ $tracker->status9 }}" required>


                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status10') is-invalid @enderror"  placeholder="Please insert " name="status10"  value="{{ $tracker->status10 }}" required>

                                                    </div>

                                                    <div class="form-group">

                                                        <input type="hidden" class="form-control @error('status10') is-invalid @enderror"  placeholder="Please insert " name="constraint"  value="-" required>

                                                    </div>


                                                </form>
                                            </td>


                                            <td class="text-left"width="15%">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('trackers.destroy', $tracker->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('trackers.show', $tracker->id) }}" class="btn btn-sm btn-dark">Show</a>
                                                    <a href="{{ route('trackers.edit', $tracker->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                      @empty
                                        <div class="alert alert-danger">
                                            Data tracker belum Tersedia.
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
