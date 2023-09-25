@extends('app')
@section('content')
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="section-heading">
    <h4>See User Experience While Using <em>This Website </em></h4>
</div>
<div class="card card-default">
    <div class="card-header">
        <form class="row row-cols-auto g-1">
            <div class="colindex">    
                <input class="form-control" type="text" name="q" value="{{ $q }}" placeholder="Search here..." />
                <button class="btn btn-success">Refresh</button>
                <a class="btn btn-primary" href="{{ route('customer.create') }}">Add</a>
                <a class="btn btn-danger" href="home#spotlights">Home</a>
            </div>
        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Pengguna</th>
                    <th>Kontak</th>
                    <th>Kesan</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php $no = 1 ?>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $customer->customer_name }}</td>
                <td>{{ $customer->contact_name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->city }}</td>
                <td>
                    <a class="btn btn-sm btn-warning" href="{{ route('customer.edit', $customer) }}">Edit</a>
                    <form method="POST" action="{{ route('customer.destroy', $customer) }}" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection