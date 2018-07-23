@extends('layouts.app')

@section('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endsection

@section('content')
    <div id="practice">
        <example-component></example-component>
        <practice-component></practice-component>
    </div>
@endsection