@extends('layouts.app') @section('content')

<div class="container">
    <div class="columns">
        <div class="column is-half">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="field">
                    <label class="label">{{ __('E-Mail Address') }}</label>
                    <div class="control">
                        <input id="email" class="input @error('email') is-danger @enderror" type="email" placeholder="E-Mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                </div>

                <div class="field">
                    <label class="label">{{ __('Password') }}</label>
                    <div class="control">
                        <input id="password" class="input @error('password') is-danger @enderror" type="password" name="password" required autocomplete="current-password"> @error('password')
                        <span class="icon is-small is-right">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span> @enderror
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">{{ __('Login')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
