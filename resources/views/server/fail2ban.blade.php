@extends('layouts.app')


@section('title')
{{ __('cipi.titles.server') }}
@endsection



@section('content')
    <livewire:server.fail2ban.iptables server_id="{{$server_id}}" />
@endsection



@section('css')

@endsection



@section('js')

@endsection

