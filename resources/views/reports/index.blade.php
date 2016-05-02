@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4>Izveštaji</h4>
            </div>

            <div class="list-group">
                @forelse ($reports as $report)
                    <a class="list-group-item" href="{{ route('reports.show', $report->id) }}">
                        <small class="pull-right">{{ $report->created_at->format('d.m.Y \u H:i:s') }}</small>
                        <h4 class="list-group-item-heading">{{ $report->object }}</h4>
                        <p class="list-group-item-text">{{ $report->institution_number }}</p>
                    </a>
                @empty
                    <div class="list-group-item text-muted">Nema izveštaja</div>
                @endforelse
            </div>
        </div>

        {!! $reports->render() !!}
    </div>
@stop
