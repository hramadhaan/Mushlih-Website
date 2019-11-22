@extends('layouts.app') @section('content')
<div class="container">
    <div class="columns">
        <div class="column is-3">
            <aside class="menu is-hidden-mobile">
                <p class="menu-label">
                    General
                </p>
                <ul class="menu-list">
                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                </ul>
                <p class="menu-label">
                    Akun
                </p>
                <ul class="menu-list">
                    <li>
                        <a href="{{route('account.index')}}">Pengaturan Akun Pengguna</a>
                    </li>
                </ul>
                <p class="menu-label">
                    Konten Islami
                </p>
                <ul class="menu-list">
                    <li>
                        <a>Konsultasi Islami</a>
                        <ul>
                            <li><a href="{{ route('konsultasi') }}">Lihat Konsultasi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Artikel</a>
                        <ul>
                            <li><a href="{{ route('artikel.create') }}">Tambah Artikel</a></li>
                            <li><a href="{{ route('artikel.index') }}">Lihat Artikel</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Event Islami</a>
                        <ul>
                        <li><a href="{{ route('event.create') }}" class="is-active">Tambah Event</a></li>
                        <li><a href="{{ route('event.index') }}">Lihat Event</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
        <div class="column is-9">
            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Assalamu'alaikum,
                        </h1>
                        <h2 class="subtitle">
                            {{Auth::user()->name}}, Sudahkah kamu sholat ?
                        </h2>
                    </div>
                </div>
            </section>
            @if(session('status'))
            <br>
            <div class="notification is-info">{{ session('status') }}</div>
            @endif
            <section class="hero is-small">
                <div class="hero-body">
                    <div class="container">
                        <h3 class="title is-4">Tulis Event Kegiatan</h3>
                        <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- JUDUL -->
                            <div class="field">
                                <label class="label">Judul Kegiatan</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="" id="judul" name="judul" value="{{ old('judul') }}" required autofocus>
                                </div>
                                <p class="help is-danger">Format : (Nama Pemateri : Judul)</p>
                            </div>
                            <!-- TANGGAL -->
                            <div class="field">
                                <label class="label">Tanggal Kegiatan</label>
                                <div class="control">
                                    <input class="input" type="date" placeholder="" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                                </div>
                            </div>
                            {{-- WAKTU --}}
                            <div class="field">
                                <label class="label">Waktu Pelaksanaan</label>
                                <div class="control">
                                    <input class="input" type="time" placeholder="" id="waktu" name="waktu" value="{{ old('waktu') }}" required>
                                </div>
                            </div>
                            {{-- ALAMAT --}}
                            <div class="field">
                                <label class="label">Alamat</label>
                                <div class="control">
                                  <textarea class="textarea" placeholder="" name="alamat" id="alamat"></textarea>
                                </div>
                              </div>
                              {{-- KETERANGAN --}}
                              <div class="field">
                                <label class="label">Keterangan Kegiatan</label>
                                <div class="control">
                                  <textarea class="textarea" placeholder="" name="keterangan" id="keterangan"></textarea>
                                </div>
                              </div>
                            <!-- GAMBAR -->
                            <div class="field">
                                <label class="label" for="">Masukkan Poster</label>
                                <div class="file is-info has-name">
                                    <label class="file-label">
                                <input class="file-input" type="file" name="poster" id="poster">
                                <span class="file-cta">
                                  <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                  </span>
                                  <span class="file-label">
                                    Info file…
                                  </span>
                                </span>
                                <span class="file-name">
                                  Masukkan file berupa gambar landscape
                                </span>
                              </label>
                                </div>
                                <p class="help is-danger">Masukkan file berupa gambar portrait</p>
                            </div>
                    </div>
                    <br>
                    <input type="submit" class="button is-block is-primary is-fullwidth" value="{{__('Tambah Artikel')}}">
                    </form>

                </div>
        </div>
        </section>
    </div>
</div>
</div>
@endsection
