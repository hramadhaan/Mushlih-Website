@extends('layouts.app') @section('content')
<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            <aside class="menu is-hidden-mobile">
                <p class="menu-label">
                    General
                </p>
                <ul class="menu-list">
                    <li><a class="is-active">Dashboard</a></li>
                </ul>
                <p class="menu-label">
                    Akun
                </p>
                <ul class="menu-list">
                    <li>
                        <a href="{{ route('account.index') }}">Pengaturan Akun</a>
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
                        <li><a href="{{ route('event.create') }}">Tambah Event</a></li>
                        <li><a href=" {{ route('event.index') }} ">Lihat Event</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
        <div class="column is-9">
            <!-- <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li class=""><a>General</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Dasboard</a></li>
                </ul>
            </nav> -->
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
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{ $user }}</p>
                            <p class="subtitle">Akun</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{ $konsultasi }}</p>
                            <p class="subtitle">Konsultasi</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{ $artikel }}</p>
                            <p class="subtitle">Artikel</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{ $event }}</p>
                            <p class="subtitle">Event</p>
                        </article>
                    </div>
                </div>
            </section>
            <div class="columns">
                <div class="column is-6">
                    <div class="card events-card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Konsultasi
                            </p>
                            <a class="card-header-icon" aria-label="more options">
                                <span class="icon">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
              </span>
                            </a>
                        </header>
                        <div class="card-table">
                            <div class="content">
                                <table class="table is-fullwidth is-striped">
                                    <tbody>
                                        <tr>
                                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                                            <td>Lorum ipsum dolem aire</td>
                                            <td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item">View All</a>
                        </footer>
                    </div>
                </div>
                <div class="column is-6">
                    <!--  -->
                    <div class="card events-card">
                        <header class="card-header">
                            <p class="card-header-title">
                                Event
                            </p>
                            <a class="card-header-icon" aria-label="more options">
                                <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                            </a>
                        </header>
                        <div class="card-table">
                            <div class="content">
                                <table class="table is-fullwidth is-striped">
                                    <tbody>
                                        @foreach ($events->reverse() as $item )
                                        <tr>
                                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                        <td>{{ $item->judul }}</td>
                                                <td class="level-right"><a class="button is-small is-primary" href="#">Action</a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <footer class="card-footer">
                        <a href="{{ route('event.index') }}" class="card-footer-item">View All</a>
                        </footer>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</div>
<script async type="text/javascript" src="{{asset('js/bulma.js')}}"></script>
@endsection
