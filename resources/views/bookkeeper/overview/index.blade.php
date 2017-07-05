@extends('layout.bookkeeper')

@php
$currentSection = 'finance';
$currentRoute = 'bookkeeper.overview';
@endphp

@section('header_content')
    @include('partials.header', [
        'headerTitle' => trans('general.hello') . ', ' . $currentUser->first_name . '!',
        'headerHint' => trans('general.overview_hint')
    ])
@endsection

@section('content')
    @if($statistics)
        @include('overview.chart')
    @else
        <div class="content-list__no-results">{{ trans('transactions.no_transactions') }}</div>
    @endif
@endsection

@include('transactions.create')