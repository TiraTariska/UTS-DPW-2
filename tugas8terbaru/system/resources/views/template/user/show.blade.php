@extends('template.admin.base')

@section('admin_content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Detail Data User
                    </div>
                    <div class="card-body">
                        <h5>Nama : {{ $user->nama }}</h5>
                        <p>
                            Email : {{ $user->email }} |
                            No Hp : {{ $user->Detail->no_handphone }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
