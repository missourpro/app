@extends('layouts.admin')

@section('content')
    <notification></notification>
    @include('admin.navbar')
    <div class="container-fluid mt-2">
        <vue-up></vue-up>
        <router-view>

        </router-view>
    </div>


@endsection