<div id="qrcode" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-sm  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-information h1 text-info"></i>
                    <h4 class="mt-2">Heads up!</h4>
                    <!-- <img src="' . site_url('assets/qrcode/' . $d->qr_code) . '" width="50px" /> -->
                    <img src="<?php echo base_url('assets/qrcode/' . $d->foto) ?>" width="50px" />
                    <button type="button" class="btn btn-info my-2" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>