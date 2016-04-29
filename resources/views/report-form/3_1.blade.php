<div class="panel panel-primary">
    <div class="panel-heading">
    <h4>3.1 Opšti podaci o objektu</h4>
    </div>

    <div class="panel-body">
        <div class="form-group">
            <label class="col-md-3 control-label">Objekat:</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="form_data[object]">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Površina objekta:</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="form_data[building_area]">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Vreme izgradnje objekta:</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="form_data[building_time]">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Površina objekta:</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="form_data[building_area2]">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Status objekta:</label>

            <div class="col-md-6">
                <select class="form-control" name="form_data[object_status]">
                    <option value="0">A| objekat izgrađen bez građevinske dozvole</option>
                    <option value="1">B| objekat izgrađen na osnovu izdate građ. dozvole od koje je odstupljeno u toku izgradnje</option>
                    <option value="2">C| objekat za koji je izdata građeinska dozvola ali nije izdata upotrebna dozvola</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Da li postoji Rešenje od Uprave za vanredne situacije na tehničku dokumentaciju na objekat?</label>

            <div class="col-md-6">
                <select class="form-control" name="form_data[param_3_1_1]">
                    <option value="0">Da</option>
                    <option value="1">Ne</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Kratak tehnički opis objekta:</label>

            <div class="col-md-6">
                <textarea name="form_data[param_3_1_2]" type="text" class="form-control" placeholder="materijalizacija, konstrukcija, fizičko stanje, namena...."></textarea>
            </div>
        </div>

    </div>
</div>
