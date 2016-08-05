<!-- statistics (small charts) -->
<style type="text/css">
    .md-bg-process{background-color:#711b58!important}
    .md-bg-wash{background-color:#ECD80A!important}
    .md-bg-waitingpayment{background-color:#CE3D19!important}
    .md-bg-done{background-color:#98DE05!important}
</style>
<div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
    <div>
        <div class="md-card">
            <div class="md-card-content md-bg-process">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"><?php echo $process;?>/100</span></div>
                <span class="uk-text-muted uk-text-small"><div class="uk-text-contrast">Order Dalam Proses</div></span>
                <h2 class="uk-margin-remove uk-text-contrast"><span class="countUpMe">0<noscript><?php if(!empty($process)){echo $process;} else {echo 'No data';}?></noscript></span></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content md-bg-wash">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"><?php echo $wash;?>/100</span></div>
                <span class="uk-text-muted uk-text-small"><div class="uk-text-contrast">Proses Baju dicuci </div></span>
                <h2 class="uk-margin-remove uk-text-contrast"><span class="countUpMe">0<noscript><?php if(!empty($wash)){echo $wash;} else {echo 'No data';}?></noscript></span></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content md-bg-waitingpayment">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"><?php echo $waitingpayment;?>/100</span></div>
                <span class="uk-text-muted uk-text-small"><div class="uk-text-contrast">Order tunggu pembayaran </div></span>
                <h2 class="uk-margin-remove uk-text-contrast"><span class="countUpMe">0<noscript><?php if(!empty($waitingpayment)){echo $waitingpayment;} else {echo 'No data';}?></noscript></span></h2>
            </div>
        </div>
    </div>
    <div>
        <div class="md-card">
            <div class="md-card-content md-bg-done">
                <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_orders peity_data"><?php echo $done;?>/100</span></div>
                <span class="uk-text-muted uk-text-small"><div class="uk-text-contrast">Order Selesai</div></span>
                <h2 class="uk-margin-remove uk-text-contrast"><span class="countUpMe">0<noscript><?php if(!empty($done)){echo $done;} else {echo 'No data';}?></noscript></span></h2>
            </div>
        </div>
    </div>
</div>
<h4 class="heading_a uk-margin-bottom">Daftar Order</h4>
<?php if (!empty($message)){ ?>
  <div class="uk-alert uk-alert-<?php echo $message['type']; ?>" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <h4><?php echo $message['title']; ?></h4>
    <?php echo $message['text']; ?>
  </div>
<?php } ?>
<div class="md-card uk-margin-medium-bottom">
    <div class="md-card-content">
        <table id="dt_individual_search" class="uk-table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>No. Order</th>
                <th>Tanggal Order</th>
                <th>Status</th>
                <th>Lihat Order</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>No. Order</th>
                <th>Tanggal Order</th>
                <th>Status</th>
                <th>Lihat Order</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($orderlist as $key => $order) {
                $id = encode($order->idORDER);
            ?>
            <tr>
                <td><?php echo $key+1;?></td>
                <td><?php echo $order->nameCUSTOMER;?></td>
                <td><?php echo $order->kodeORDER;?></td>
                <td><?php echo $order->createdateORDER;?></td>
                <td><?php echo $order->status;?></td>
                <td><a href="<?php echo base_url();?>codewelladmin/Order/detail/<?php echo $id;?>">Lihat detail</a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>