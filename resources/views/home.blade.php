@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button type="button" onclick="logout()">Logout</button>
                    {{ __('You are logged in!') }}
                        <form action="{{ route('logoutakun1') }}" method="POST" id="form-logout">
                        @csrf
                            
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function logout(){
        document.getElementById("form-logout").submit();
    }
</script>
@endsection
