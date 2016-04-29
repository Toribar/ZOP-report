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
