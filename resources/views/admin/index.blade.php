@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <p>Hallo, <span style="font-weight: bold;">{{Auth::user()->nama}}</span>. anda berhasil login!.</p>

            <form action="{{Route('auth.logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">Logout</button>
            </form>
        </div>
    </div>
</div>

@endsection