<x-layout title="Login">
    <section class="container">
        <div class="Login-form">
            <h1>Login</h1>
            <form action="{{ route('login.logar') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="usuario" type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ old('usuario') }}">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}

                    <label for="password" class="form-label">Password</label>
                    <input name="senha" type="password" class="form-control" id="password" value="{{ old('senha') }}">
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                </div>
                <div class="button">
                    <button type="submit" class="btn btn-primary">Acessar</button>
                </div>
                {{ isset($erro) && $erro != '' ? $erro : '' }}
            </form>
        </div>
    </section>  
</x-layout>