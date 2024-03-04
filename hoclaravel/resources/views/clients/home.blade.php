@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('sidebar')
    @parent {{-- Kế thừa từ phần cha bổ sung cho phần con  --}}
    <h3>Home Sidebar</h3>
@endsection
@section('content')
    <h1 class="">Trang chủ</h1>
    @datetime('2024-3-2 21:45:00')
    @include('clients.contents.slide')
    @include('clients.contents.about')
    @datetime('2024-3-2 21:50:00')

    @env('production')
        <p>Môi trường production</p>
    @elseenv('test')
        <p>môi trường test</p>
    @else
        <p>Môi trường dev</p>
    @endenv

    <x-alert type="info" :content="$message" data-icon="youtube" />
    {{-- <x-inputs.button />
    <x-forms.button /> --}}
@endsection

@section('css')
@endsection

@section('js')
@endsection