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
