@extends('layout.admin')
@section('title','Drugs')
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
                        <th>Type</th>
                        <th>Brand</th>
                        <th>Generic</th>
                        <th>Company</th>
                        <th>Strength</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($drug as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <img src="{{$d->type}}" alt="type" style="width:40px;height: 15px;">
                            </td>
                            <td>{{$d->brand}}</td>
                            <td>{{$d->generic}}</td>
                            <td>{{$d->company}}</td>
                            <td>{{$d->strength}}</td>
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
