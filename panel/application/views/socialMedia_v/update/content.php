<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->title</b> hesabınızı düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("socialMedia/update/$item->id"); ?>" method="post" >
                    <div class="form-group">
                        <label>Kullanıcı Adı</label>
                        <input class="form-control"  name="title"  value="<?php echo isset($form_error) ? set_value("title") : "$item->title"; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                          <div class="form-group">
                        <label>Ad Soyad</label>
                        <input class="form-control"  name="url" value="<?php echo isset($form_error) ? set_value("url") : "$item->url"; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("url"); ?></small>
                        <?php } ?>
                    </div>     
                    <button type="submit" class="btn btn-primary btn-xs btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("socialMedia"); ?>" class="btn btn-xs btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>