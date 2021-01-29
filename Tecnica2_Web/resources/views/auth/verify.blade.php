@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('El enlace de verificación fue enviado a su email.') }}
                        </div>
                    @endif

                    {{ __('Por favor revise su email para recibir un enlace de verificación.') }}
                    <a href="{{ route('verification.resend') }}">{{ __('Haga click aquí') }}</a> {{ __('si no recibió ningún email.') }}.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
