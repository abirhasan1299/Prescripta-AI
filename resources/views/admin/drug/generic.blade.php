@extends('layout.admin')
@section('title','Generics')
@push('css')

@endpush

@section('content')
    <div class="row mt-3">
        <div class="col-12">
            <div class="card" >
                <div class="card-body">
                    <table data-tables="basic" class="table table-striped dt-responsive align-middle mb-0" >
                        <thead class="thead-sm text-uppercase fs-xxs">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end card-body-->
            </div>
            <!-- end card-->
        </div>
    </div>
@endsection

@push('js')
@endpush
