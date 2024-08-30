<ul class="nav nav-tabs" role="tablist">
        <li id="myTabs" role="presentation" class="active">
                <a href="#tinggi" aria-controls="tinggi" role="tab" data-toggle="tab">Resiko Tinggi</a>
        </li>
        <li id="myTabs" role="presentation" class="">
                <a href="#sedang" aria-controls="sedang" role="tab" data-toggle="tab">Resiko Sedang</a>
        </li>
        <li id="myTabs" role="presentation" class="">
                <a href="#rendah" aria-controls="rendah" role="tab" data-toggle="tab">Resiko Rendah</a>
        </li>
</ul>
<div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tinggi">
                <x-dashboards.tabel :id="$idtinggi" />
        </div>
        <div role="tabpanel" class="tab-pane" id="sedang">
                <x-dashboards.tabel :id="$idsedang" />
        </div>
        <div role="tabpanel" class="tab-pane" id="rendah">
                <x-dashboards.tabel :id="$idrendah" />
        </div>
</div>