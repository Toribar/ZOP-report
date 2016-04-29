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
            <form method="post" action="/" class="form-horizontal">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Zavodni broj:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Objekat:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Lokacija:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Katastarska parcela:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Vlasnik objekta:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="page-header text-center ">
                    <h4>3.0 NALAZ O PRIMENJENIM MERAMA ZAŠTITE OD POŽARA</h4>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>3.1 Opšti podaci o objektu</h4>
                    </div>

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Objekat:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Površina objekta:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Vreme izgradnje objekta:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Površina objekta:</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Status objekta:</label>

                            <div class="col-md-6">
                                <select class="form-control">
                                    <option>A| objekat izgrađen bez građevinske dozvole</option>
                                    <option>B| objekat izgrađen na osnovu izdate građ. dozvole od koje je odstupljeno u toku izgradnje</option>
                                    <option>C| objekat za koji je izdata građeinska dozvola ali nije izdata upotrebna dozvola</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Da li postoji Rešenje od Uprave za vanredne situacije na tehničku dokumentaciju na objekat?</label>

                            <div class="col-md-6">
                            @include('partials.yes_no-form')
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Kratak tehnički opis objekta:</label>

                            <div class="col-md-6">
                                <textarea type="text" class="form-control" placeholder="materijalizacija, konstrukcija, fizičko stanje, namena.... "></textarea>
                            </div>
                        </div>

                    </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>3.2 Spoljašnje uređenje objekta u oblasti zaštite od požara </h4>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je ulaz na plac adekvatan za vartrogasna vozila?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je obezbeđen adekvatan pristup vatrogasnih vozila objektu ? (požarni krug)</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je objekat  pokriven spoljašnjom hidrantskom mrežom?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je hidrantska mreža priključena na javni sistem za navodnjavanje ili su obezbeđeni posebni rezervoari?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Vrednost pritiska u spoljašnjoj hidrantskoj mreži iznosi: </label>

                                <div class="col-md-6">
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Datum poslednjeg merenja: </label>

                                <div class="col-md-6">
                                    <input class="form-control" type="date">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Fotografija spoljašnje hidratske mreže:</label>

                                <div class="col-md-6">
                                    <input class="form-control" type="file">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Napomena:</label>

                                <div class="col-md-6">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je obeleženo sabirno mesto za evakuaciju iz objekta?</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Fasada objekta:</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" placeholder="kratak opis fizičkog stanja fasade, materijalizacija,..."></textarea>
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-3">
                                    <input class="form-control" type="file">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <input class="form-control" type="file">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>3.3 Unutrašnje uređenje objekta u oblasti zaštite od požara</h4>
                        </div>

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Kratak tehnički opis enterijera?</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" placeholder="materijalizacija, krovna konstrukcija, etaže..."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Koliko ima evakuacionih izlaza iz objekta ? </label>

                                <div class="col-md-6">
                                    <input class="form-control" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li su evakuacioni izlazi prohodni?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li su evakuacioni izlazi obleženi na adekvatan način?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je objekat podeljen na protivpožarne zone?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li su na prelazu dve protivpožarne zone montirana vrata otporna prema požaru?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li su vrata otporna prema požaru ispravna i prohodna?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li su prohodni svi evakuacioni putevi?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je hidrantska mreža priključena na javni sistem za navodnjavanje ili su obezbeđeni posebni rezervoari?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li su svi evakuacioni putevi obleženi na adekvatan način?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li su na vidnom mestu istaknuti planovi evakuacije i pravila za postupanje u slučaju požara?</label>

                                <div class="col-md-6">
                                    @include('partials.select-form')
                                </div>
                            </div>
                            <br>
                            <h4 class="text-center">Da li je u objektu izveden neki od sledećih sistema zaštite od požara?</h4>
                            <br>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Stabilni sistem za dojavu požara</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Stabilni sistem za detekciju eksplozivnih gasova</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Stabilni sistem za gašenje požara</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Sistem za odvođenje dima i toplote</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>
                            <br>
                            <h4 class="text-center">Da li su u objektu ugrađene sledeće instalacije i oprema?</h4>
                            <br>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Protivpožarne klapne</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Protivpožarna rasveta</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Protivpožarni aparati </label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Hidrantska mreža</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Uzemljenje el. instalacija</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Gromobranska instalacija</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Uređaji u Ex zaštiti </label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li u objektu postoje odimne kupole?</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je ugrađen centralni informacioni sistem? </label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Da li je ugrađen sistem ozvučenja?</label>

                                <div class="col-md-6">
                                    @include('partials.yes_no-form')
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
