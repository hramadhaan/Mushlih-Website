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
                            <li><a class="is-active" href="{{ route('artikel.index') }}">Lihat Artikel</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Event Islami</a>
                        <ul>
                            <li><a href="{{ route('event.create') }}">Tambah Event</a></li>
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
            <br>
            <section class="hero is-small">
                {{-- KONTEN --}}
                <table class="table is-fullwidth is-hoverable">
                    <thead>
                        <tr class="">
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($artikel->reverse() as $item)
                        <tr>
                            <th>{{ $no++ }}</th>
                            <td>{{ $item->judul }}</td>
                            <td>
                                    <div class="field is-grouped">
                                        <div class="control">
                                                <a href="{{ route('artikel.edit',[$item->id]) }}" class="button is-primary is-small">Detail</a>
                                        </div>
                                        <div class="control">
                                                <form action="{{ route('artikel.destroy',[$item->id]) }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="submit" value="Delete" class="button is-danger is-small">
                                                    </form>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
@endsection
