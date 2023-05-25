@extends('layouts.main')
@section('container')

<div class="row justify-content-center">
    <div class="card col-md-5" style="margin-top: 100px">
        {{-- @if (session('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}
        <div class="container" style="margin-top:50px">
            <main class="form-login">
                <form action="" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal" style="text-align: center">Silahkan di isi</h1>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control mt-2" id="name"
                            placeholder="Nama" autofocus>
                        <label for="email">Nama</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" name="nis" class="form-control mt-2" id="nis"
                            placeholder="nis">
                        <label for="nis">Nis</label>
                    </div>
                     <div class="form-floating">
                        <input type="text" name="romber" class="form-control mt-2" id="rombel"
                            placeholder="Rombel">
                        <label for="rombel">Rombel</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-4 mb-3" type="submit">Kirim</button>
                </form>
                {{-- <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register</a></small> --}}
            </main>
        </div>
    </div>
</div>

@endsection
