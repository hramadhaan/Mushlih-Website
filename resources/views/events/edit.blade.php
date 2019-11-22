@extends('layouts.app') @section('content') @error('email')
<div class="notification is-danger">E-Mail atau Password Salah !</div>
@enderror

<div class="column is-4 is-offset-4">
    <div class="box">
        <section class="hero is-small">
                <h3 class="title is-4">Event Kegiatan</h3>
        </section>
        <br>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="field">
                <label class="label">Judul</label>
                <div class="control">
                <input type="text" value="{{ $event->judul }}" name="judul" id="judul" disabled class="input @error('judul') is-danger @enderror"  required="required" autocomplete="judul" autofocus>
                </div>
            </div>

            <div class="field">
                <label class="label">Tanggal</label>
                <div class="control">
                <input type="text" value="{{ $event->tanggal }}" name="judul" id="judul" disabled class="input @error('judul') is-danger @enderror"  required="required" autocomplete="judul" autofocus>
                </div>
            </div>

            <div class="field">
                    <label class="label">Waktu</label>
                    <div class="control">
                    <input type="text" value="{{ $event->waktu }}" name="judul" id="judul" disabled class="input @error('judul') is-danger @enderror"  required="required" autocomplete="judul" autofocus>
                    </div>
            </div>

            <div class="field">
                <label class="label">Alamat</label>
                <div class="control">
                <textarea class="textarea" placeholder="" name="article" disabled id="article">{{ $event->alamat }}</textarea>
                </div>
            </div>

            <div class="field">
                    <label class="label">Keterangan</label>
                    <div class="control">
                    <textarea class="textarea" placeholder="" name="article" disabled id="article">{{ $event->keterangan }}</textarea>
                    </div>
                </div>

            <div class="field">
                <label for="" class="label">Poster</label>
            <img src="{{ asset('storage/'.$event->poster) }}" alt="" srcset="" width="96px">
            </div>
        </form>
    </div>
</div>

@endsection
