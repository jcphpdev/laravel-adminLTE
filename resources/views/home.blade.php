@extends('layouts.app')

@section('content')
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Blank Box</h3>
    </div>
    <div class="box-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>
    <!-- /.box-body -->
</div>
@endsection
