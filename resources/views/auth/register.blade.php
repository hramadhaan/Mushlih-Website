@extends('layouts.app') @section('content') @error('email')
<div class="notification is-danger">E-Mail Anda telah terdaftar !</div>
@enderror
<div class="column is-4 is-offset-4">
    <div class="box">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="field">
                <label class="label">Nama Lengkap</label>
                <div class="control">
                    <input id="name" class="input @error('name') is-danger @enderror" type="text" autofocus="" name="name" value="{{ old('name')}}" required autocomplete="name">
                </div>
            </div>

            <div class="field">
                <label class="label">E-Mail</label>
                <div class="control">
                    <input id="email" class="input @error('email') is-danger @enderror" type="email" autofocus="" name="email" value="{{ old('email')}}" required autocomplete="email">
                </div>
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input id="password" class="input @error('password') is-danger @enderror" type="password" name="password" value="{{ old('password') }}" required autocomplete="password"> @error('password')
                    <span class="icon is-small is-right">
                        <i class="fas fa-exclamation-triangle"></i>
                      </span> @enderror
                </div>
            </div>

            <div class="field">
                <label class="label">Confirm Password</label>
                <div class="control">
                    <input id="password-confirm" class="input @error('password_confirmation') is-danger @enderror" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="field">
                <label class="checkbox">
  <input type="checkbox">
  Remember me
</label>
            </div>
            <button type="submit" class="button is-block is-info is-fullwidth">{{__('Register')}} <i class="fa fa-sign-in" aria-hidden="true"></i></button>
        </form>
    </div>
    @endsection
