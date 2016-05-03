@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="page-header  text-center">
                    <h3>IZVEŠTAJ O PODOBNOSTI OBJEKTA ZA UPOTREBU <br> U
                        <strong>OBLASTI ZAŠTITE OD POŽARA</strong>
                    </h3>
                </div>

                <form method="POST" class="form-horizontal" action="{{ route('reports.store') }}">
                    @include('report-form.header-form')

                    <div class="page-header text-center ">
                        <h4>3.0 NALAZ O PRIMENJENIM MERAMA ZAŠTITE OD POŽARA</h4>
                    </div>

                    @include('report-form.3_1')
                    @include('report-form.3_2')
                    @include('report-form.3_3')
                    @include('report-form.submit')
                </form>
            </div>
        </div>
    </div>
@endsection
