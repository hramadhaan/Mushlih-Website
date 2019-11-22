@extends('layouts.app') @section('content') @error('email')
<div class="notification is-danger">E-Mail atau Password Salah !</div>
@enderror

<div class="column is-4 is-offset-4">
    <div class="box">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input type="email" name="email" id="email" class="input @error('email') is-danger @enderror" value="{{ old('email') }}" required="required" autocomplete="email" autofocus>
                </div>
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input type="password" name="password" id="password" class="input @error('password') is-danger @enderror" value="{{ old('password') }}" required="required" autocomplete="email">
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">{{ __('Login') }}</button>
                </div>
            </div>


        </form>
    </div>
</div>

@endsection
