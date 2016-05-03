@extends('layouts.pdf')

@section('content')
    <h1>
        IZVEŠTAJ O PODOBNOSTI OBJEKTA ZA UPOTREBU U
        <br>
        <strong>OBLASTI ZAŠTITE OD POŽARA</strong>
    </h1>

    <br>
    <br>
    <br>
    <br>

    <table class="table">
        <tr>
            <td class="nowrap" width="1%">ZAVODNI BROJ:</td>
            <td class="border"></td>
        </tr>

        <tr>
            <td class="nowrap">OBJEKAT:</td>
            <td class="border"></td>
        </tr>

        <tr>
            <td class="nowrap">LOKACIJA:</td>
            <td class="border"></td>
        </tr>

        <tr>
            <td class="nowrap">KATASTARSKA PARCELA:</td>
            <td class="border"></td>
        </tr>

        <tr>
            <td class="nowrap">VLASNIK OBJEKTA:</td>
            <td class="border"></td>
        </tr>
    </table>

    <p>CLANOVI KOMISIJE:</p>
    <p>1. NN br. licence</p>
    <p>2. NN br. licence</p>
    <p>3. NN br. licence</p>
    <p>4. NN br. licence</p>
    <p>5. NN br. licence</p>

    <table class="table table-border">
        <tr>
            <td>1.</td>
            <td>Da li je ulaz na plac adekvatan za vartrogasna vozila?</td>
            <td>DA</td>
            <td>NE</td>
            <td>DELIMICNO</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Da li je obezbedjen adekvatan pristup vatrogasnih vozila objektu ? (požarni krug)</td>
            <td>DA</td>
            <td>NE</td>
            <td>DELIMICNO</td>
        </tr>

        <tr>
            <td colspan="5">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5">&nbsp;</td>
        </tr>
    </table>
@stop
