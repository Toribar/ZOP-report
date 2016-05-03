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
            <td class="border">{{ $report->institution_number }}</td>
        </tr>

        <tr>
            <td class="nowrap">OBJEKAT:</td>
            <td class="border">{{ $report->object }}</td>
        </tr>

        <tr>
            <td class="nowrap">LOKACIJA:</td>
            <td class="border">{{ $report->location }}</td>
        </tr>

        <tr>
            <td class="nowrap">KATASTARSKA PARCELA:</td>
            <td class="border">{{ $report->cadaster }}</td>
        </tr>

        <tr>
            <td class="nowrap">VLASNIK OBJEKTA:</td>
            <td class="border">{{ $report->object_owner }}</td>
        </tr>
    </table>

    <p style="padding-bottom: 15px;">CLANOVI KOMISIJE:</p>
    <p style="padding-bottom: 10px;">1. NN br. licence</p>
    <p style="padding-bottom: 10px;">2. NN br. licence</p>
    <p style="padding-bottom: 10px;">3. NN br. licence</p>
    <p style="padding-bottom: 10px;">4. NN br. licence</p>
    <p>5. NN br. licence</p>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <p>U Beogradu</p>
    <p>April, 2016. God</p>

    <hr> <!-- page break -->

    <h1>
        IZVEŠTAJ O PODOBNOSTI OBJEKTA ZA UPOTREBU U
        <br>
        <strong>OBLASTI ZAŠTITE OD POŽARA</strong>
    </h1>

    <br>
    <br>
    <br>

    <h1>
        <strong>Sadržaj:</strong>
    </h1>
    <p>
        <strong>1.0 IMENOVANJE KOMISIJE</strong>
        za izradu nalaza o podobnosti objekta
        <br>
        u oblasti zaštite od požara
    </p>
    <p>
        <strong>2.0 LICENCE CLANOVA KOMISIJE</strong>
    </p>
    <p>
        <strong>3.0 NALAZ O PRIMENJENIM MERAMA ZAŠTITE OD POŽARA</strong>
    </p>
    <p>3.1 Opšti podaci o objektu</p>
    <p>3.2 Spoljašnje uredjenje objekta u oblasti zaštite od požara</p>
    <p>3.3 Unutrašnje uredjenje objekta u oblasti zaštite od požara</p>
    <p>
        <strong>4.0 ZAKLJUCAK</strong>
        - izjava o primenjenim merama i stanju
        <br>
        bezbednosti od požara
    </p>

    <hr> <!-- page break -->

    <h1>
        <strong>1.0 IMENOVANJE KOMISIJE</strong>
    </h1>
    <p style="text-align: justify;">Na osnovu clana 8. Zakona o sticanju prava svojine na zemljištu, objektima  privrednog društva za proizvodnju i preradu celika Železara Smederevo doo Smederevo, imenuje se komisija za Utvrdjivanje podobnosti objekta za upotrebu u oblasti zaštite od požara;</p>
    <br>
    <p style="padding-bottom: 10px;">Predsednik komisije:</p>

    <p>Clan 1:</p>
    <p>NN</p>
    <p>dipl.inž.maš.</p>
    <p style="padding-bottom: 10px;">Licence:</p>

    <p>Clan 2:</p>
    <p>NN</p>
    <p>dipl.inž.maš.</p>
    <p style="padding-bottom: 10px;">Licence:</p>

    <p>Clan 3:</p>
    <p>NN</p>
    <p>dipl.inž.el.</p>
    <p style="padding-bottom: 10px;">Licence:</p>

    <p>Clan 4:</p>
    <p>NN</p>
    <p>dipl.inž.arh.</p>
    <p>Licence:</p>

    <hr> <!-- page break -->

    <h1>
        <strong>2.0 LICENCE CLANOVA KOMISIJE</strong>
    </h1>

    <hr> <!-- page break -->

    <h1>
        <strong>3.0 NALAZ O PRIMENJENIM MERAMA ZAŠTITE OD POŽARA</strong>
    </h1>

    <h2>
        <i><u>3.1 Opšti podaci o objektu</u> </i>
    </h2>

    <br>

    <table class="table">
        <tr>
            <td class="nowrap" width="1%">Objekat:</td>
            <td class="border">{{ $report->form_data->object }}</td>
        </tr>

        <tr>
            <td class="nowrap" width="1%">Povrsina objekta:</td>
            <td class="border">{{ $report->form_data->building_area }}</td>
        </tr>

        <tr>
            <td class="nowrap" width="1%">Vreme izgradnje objekta:</td>
            <td class="border">{{ $report->form_data->building_time }}</td>
        </tr>

        <tr>
            <td class="nowrap" width="1%">Povrsina objekta:</td>
            <td class="border">{{ $report->form_data->building_area2 }}</td>
        </tr>
    </table>

    <p>Status objekta:</p>
    <table class="table table-border">
        <tr>
            <td class="{{ $report->isChosen('object_status', 0) }}">A</td>
            <td>objekat izgradjen bez gradjevinske dozvole</td>
        </tr>

        <tr>
            <td class="{{ $report->isChosen('object_status', 1) }}">B</td>
            <td>objekat izgradjen na osnovu izdate gradj. dozvole od koje je odstupljeno u toku izgradnje</td>
        </tr>

        <tr>
            <td class="{{ $report->isChosen('object_status', 2) }}">C</td>
            <td>Objekat za koji je izdata gradjeinska dozvola ali nije izdata upotrebna dozvola</td>
        </tr>
    </table>

    <br>

    <table class="table">
        <tr>
            <td class="nowrap" width="1%">1.Da li postoji Rešenje od Uprave za vanredne situacije na
            tehnicku dokumentaciju<br> na objekat?</td>
            <td class="border {{ $report->isChosen('param_3_1_1', 0) }}">DA</td>
            <td class="border {{ $report->isChosen('param_3_1_1', 1) }}">NE</td>
        </tr>
    </table>

    <br>

    <p>2.Kratak tehnicki opis objekta: </p>

    <table class="table table-border">
        <tr>
            <td class="border" style="height: 65px; width: 100%;"></td>
        </tr>
    </table>

    <br>

    <h2>
        <i>
            <u>3.2 Spoljašnje uredjenje objekta u oblasti zaštite od požara
            </u>
        </i>
    </h2>
    <br>
    <table class="table table-border">
        <tr>
            <td>1.</td>
            <td>Da li je ulaz na plac adekvatan za vartrogasna vozila?</td>
            <td class="{{ $report->isChosen('param_3_2_1', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_2_1', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_2_1', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td>2.</td>
            <td>Da li je obezbedjen adekvatan pristup vatrogasnih vozila objektu ? (požarni krug)</td>
            <td class="{{ $report->isChosen('param_3_2_2', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_2_2', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_2_2', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td colspan="5">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5">&nbsp;</td>
        </tr>

        <tr>
            <td>3.</td>
            <td>Da li je objekat  pokriven spoljašnjom hidrantskom mrežom?</td>
            <td class="{{ $report->isChosen('param_3_2_3', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_2_3', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_2_3', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td>4.</td>
            <td>Da li je hidrantska mreža prikljucena na javni sistem za navodnjavanje ili su obezbedjeni posebni rezervoari?</td>
            <td class="{{ $report->isChosen('param_3_2_4', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_2_4', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_2_4', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td>5.</td>
            <td colspan="4">Vrednost pritiska u spoljašnjoj hidrantskoj mreži iznosi    ______, datum poslednjeg merenja ________.
            </td>
        </tr>
    </table>

    <hr> <!-- page break -->

    <table class="table table-border" style="padding-bottom: 1px;">
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>

        <tr>
            <td>6.</td>
            <td>Fotografija spoljašnje hidratske mreže:</td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>

        <tr>
            <td style="height: 130px;" colspan="3">
                <u>Napomena:</u>
            </td>
        </tr>
    </table>





    <table class="table">
        <tr>
            <td class="border">7.</td>
            <td class="border">Da li je obeleženo sabirno mesto za evakuaciju iz objekta?</td>
            <td class="border {{ $report->isChosen('param_3_2_7', 0) }}">DA</td>
            <td class="border {{ $report->isChosen('param_3_2_7', 1) }}">NE</td>
        </tr>
    </table>

    <table class="table">
        <tr>
            <td class="border">8.</td>
            <td class="border">Fasada objekta: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
    </table>

    <table class="table table-border" style="padding-bottom: 1px;">
        <tr>
            <td colspan="1">(kratak opis fizickog stanja fasade, materijalizacija,...) </td>
        </tr>

        <tr>
            <td colspan="1">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="1" style="height: 120px;">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="1">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="1">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="1">&nbsp;</td>
        </tr>
    </table>

    <br>

    <h2>
        <i>
            <u>3.3 Unutrašnje uredjenje objekta u oblasti zaštite od požara</u>
        </i>
    </h2>

    <table class="table">
        <tr>
            <td class="border">1.</td>
            <td class="border" colspan="2">Kratak tehnicki opis enterijera? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>

        <tr>
            <td colspan="3" class="border">materijalizacija, krovna konstrukcija, etaže...)</td>
        </tr>

        <tr>
            <td colspan="3" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="3" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td class="border">2.</td>
            <td class="border">Koliko ima evakuacionih izlaza iz objekta ?</td>
            <td class="border">&nbsp;</td>
        </tr>
    </table>

    <table class="table table-border">
        <tr>
            <td>3.</td>
            <td>Da li su evakuacioni izlazi prohodni?&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="{{ $report->isChosen('param_3_3_3', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_3', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_3_3', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td>4.</td>
            <td>Da li su evakuacioni izlazi obleženi na adekvatan nacin?</td>
            <td class="{{ $report->isChosen('param_3_3_4', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_4', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_3_4', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td>5.</td>
            <td>Da li je objekat podeljen na protivpožarne zone?</td>
            <td class="{{ $report->isChosen('param_3_3_5', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_5', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_3_5', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td>6.</td>
            <td>Da li su na prelazu dve protivpožarne zone montirana vrata otporna prema požaru?</td>
            <td class="{{ $report->isChosen('param_3_3_6', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_6', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_3_6', 2) }}">DELIMICNO</td>
        </tr>
    </table>

    <hr> <!-- page break -->

    <table class="table table-border">
        <tr>
            <td>7.</td>
            <td>Da li su vrata otporna prema požaru ispravna i prohodna?</td>
            <td class="{{ $report->isChosen('param_3_3_7', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_7', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_3_7', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td>8.</td>
            <td>Da li su prohodni svi evakuacioni putevi?</td>
            <td class="{{ $report->isChosen('param_3_3_8', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_8', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_3_8', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td>9.</td>
            <td>Da li su svi evakuacioni putevi obleženi na adekvatan nacin?</td>
            <td class="{{ $report->isChosen('param_3_3_9', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_9', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_3_9', 2) }}">DELIMICNO</td>
        </tr>

        <tr>
            <td colspan="5" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td>10.</td>
            <td>Da li su na vidnom mestu istaknuti planovi evakuacije i pravila za postupanje u slucaju požara?</td>
            <td class="{{ $report->isChosen('param_3_3_10', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_10', 1) }}">NE</td>
            <td class="{{ $report->isChosen('param_3_3_10', 2) }}"DELIMICNO</td>
        </tr>

        <tr>
            <td colspan="5" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td>13.</td>
            <td colspan="3">Da li je u objektu izveden neki od sledecih sistema zaštite od požara?</td>
            <td>Da li postoje važeci izveštaj o funkcionalnom ispitivanju? (upisati datum ispitivanja)</td>
        </tr>

        <tr>
            <td>a</td>
            <td>Stabilni sistem za dojavu požara</td>
            <td class="{{ $report->isChosen('param_3_3_13a', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_13a', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>b</td>
            <td>Stabilni sistem za detekciju eksplozivnih gasova</td>
            <td class="{{ $report->isChosen('param_3_3_13b', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_13b', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>c</td>
            <td>Stabilni sistem za gašenje požara</td>
            <td class="{{ $report->isChosen('param_3_3_13c', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_13c', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>d</td>
            <td>Sistem za odvodjenje dima i toplote</td>
            <td class="{{ $report->isChosen('param_3_3_13d', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_13d', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td>18</td>
            <td>Da li su u objektu ugradjene sledeće instalacije i oprema?</td>
            <td class="{{ $report->isChosen('param_3_3_18', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_18', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>a</td>
            <td>Protivpožarne klapne</td>
            <td class="{{ $report->isChosen('param_3_3_18a', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_18a', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>b</td>
            <td>Protivpožarna rasveta</td>
            <td class="{{ $report->isChosen('param_3_3_18b', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_18b', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>c</td>
            <td>Protivpožarni aparati</td>
            <td class="{{ $report->isChosen('param_3_3_18c', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_18c', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>d</td>
            <td>Hidrantska mreža</td>
            <td class="{{ $report->isChosen('param_3_3_18d', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_18d', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>e</td>
            <td>Uzemljenje el. instalacija</td>
            <td class="{{ $report->isChosen('param_3_3_18e', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_18e', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>f</td>
            <td>Gromobranska instalacija</td>
            <td class="{{ $report->isChosen('param_3_3_18f', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_18f', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td>g</td>
            <td>Uredjaji u Ex zaštiti</td>
            <td class="{{ $report->isChosen('param_3_3_18g', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_18g', 1) }}">NE</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="5" class="border">&nbsp;</td>
        </tr>

        <tr>
            <td>19.</td>
            <td colspan="2">Da li u objektu postoje odimne kupole?</td>
            <td class="{{ $report->isChosen('param_3_3_19', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_19', 1) }}">NE</td>
        </tr>

        <tr>
            <td>20.</td>
            <td colspan="2">Da li je ugradjen centralni informacioni sistem?</td>
            <td class="{{ $report->isChosen('param_3_3_20', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_20', 1) }}">NE</td>
        </tr>

        <tr>
            <td>21.</td>
            <td colspan="2">Da li je ugradjen sistem ozvucenja?</td>
            <td class="{{ $report->isChosen('param_3_3_21', 0) }}">DA</td>
            <td class="{{ $report->isChosen('param_3_3_21', 1) }}">NE</td>
        </tr>
    </table>

    <hr> <!-- page break -->

    <h1>
        <strong>V ZAKLJUCAK IZVEŠTAJA</strong>
    </h1>
    <p>
        <strong>Na osnovu</strong>
    </p>


@stop
