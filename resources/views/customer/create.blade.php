@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <div class="section-heading">
            <h4>Add <em>User Experience </em></h4>
        </div>
        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama Pengguna <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="customer_name" value="{{ old('customer_name') }}" />
            </div>
            <div class="mb-3">
                <label>Kontak <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="contact_name" value="{{ old('contact_name') }}" />
            </div>
            <div class="mb-3">
                <label>Kesan</label>
                <input class="form-control" type="text" name="address" value="{{ old('address') }}" />
            </div>
            <div class="mb-3">
                <label>Pesan</label>
                <input class="form-control" type="text" name="city" value="{{ old('city') }}" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" >Save</button>
                <a class="btn btn-danger" href="{{ route('customer.index') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection