@extends('layouts.app') @section('content')
<div class="container">
    <div class="columns">
        <div class="column is-3 ">
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
                        <a  href="{{route('account')}}" class="is-active">Pengaturan Akun Pengguna</a>
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
                            <li><a href="">Tambah Artikel</a></li>
                            <li><a href="">Lihat Artikel</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Event Islami</a>
                        <ul>
                            <li><a href="">Tambah Event</a></li>
                            <li><a href="">Lihat Event</a></li>
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
            <section class="info-tiles">
                <table class="table is-fullwidth is-hoverable">
                    <thead>
                        <tr class="">
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($account as $item)
                            <tr>
                            <th>{{ $item->id }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="" class="button is-primary is-small">Detail</a>
                            <a href="" class="button is-danger is-small">Hapus</a>                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>
<script async type="text/javascript" src="{{asset('js/bulma.js')}}"></script>
@endsection
