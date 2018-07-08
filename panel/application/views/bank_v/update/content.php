<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->title</b> hesabınızı düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("bank/update/$item->id"); ?>" method="post">
                    <div class="form-group">
                        <label>Banka Adı</label>
                        <input class="form-control" name="title" value="<?php echo $item->title; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Iban Numarası</label>
                        <input class="form-control" name="iban" value="<?php echo $item->iban; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("iban"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Hesap No</label>
                        <input class="form-control" name="hesapno" value="<?php echo $item->hesapno; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("hesapno"); ?></small>
                        <?php } ?>
                    </div>
            


                                <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
            
                    <a href="<?php echo base_url("bank"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>