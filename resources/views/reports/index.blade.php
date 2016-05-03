@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <a class="btn btn-success btn-sm pull-right" href="{{ route('reports.create') }}">
                    <i class="fa fa-plus"></i> Novi izveštaj
                </a>

                <h4>Izveštaji</h4>
            </div>

            <div class="list-group">
                @forelse ($reports as $report)
                    <a class="list-group-item" href="{{ route('reports.show', $report->id) }}">
                        <small class="pull-right">{{ $report->user->name }}, {{ $report->created_at->diffForHumans() }}</small>
                        <h4 class="list-group-item-heading">{{ $report->object ?: '(prazno)' }}</h4>
                        <p class="list-group-item-text">{{ $report->institution_number ?: '(prazno)' }}</p>
                    </a>
                @empty
                    <div class="list-group-item text-muted">Nema izveštaja</div>
                @endforelse
            </div>
        </div>

        {!! $reports->render() !!}
    </div>
@stop
