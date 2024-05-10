@extends('layouts.app')

@section('content')
    @livewire('booking.table', ['type' => $type])
@endsection
