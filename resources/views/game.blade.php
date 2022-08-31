@extends('layouts.frontend')
@section('content')

@if(count($winners) == 0)

<h2>No data found</h2>
@endif
@if(isset($winners))
<winners-list-component  :winners="{{$winners}}"/>


            @endif
@endsection
