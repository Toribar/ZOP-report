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

                    <div class="panel-footer">
                        <a href="#" class="btn btn-success">PDF</a>
                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Fotografije</h4>
                    </div>

                    @unless ($report->images->isEmpty())
                        <div class="panel-body">
                            <div class="row">
                                @foreach ($report->images as $image)
                                    <div class="col-xs-4">
                                        <img class="img-responsive" src="/uploads/{{ $image->image_path }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endunless

                    <div class="panel-footer">
                        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="report_id" value="{{ $report->id }}">

                            <span class="btn btn-success btn-file">
                                <input type="file" name="image" class="submittable"> Dodaj
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
