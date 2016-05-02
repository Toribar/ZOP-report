@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Izveštaj: {{ $report->object }}</h4>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">
                                <strong>Zavodni broj</strong>
                            </div>

                            <div class="col-md-8">{{ $report->institution_number }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>Objekat</strong>
                            </div>

                            <div class="col-md-8">{{ $report->object }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>Lokacija</strong>
                            </div>

                            <div class="col-md-8">{{ $report->location }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>Katastarska parcela</strong>
                            </div>

                            <div class="col-md-8">{{ $report->cadaster }}</div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <strong>Vlasnik objekta</strong>
                            </div>

                            <div class="col-md-8">{{ $report->object_owner }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
