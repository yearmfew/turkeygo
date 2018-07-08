<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Banka Hesabı Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("bank/save"); ?>" method="post">
                    <div class="form-group">
                        <label>Banka Adı</label>
                        <input class="form-control" placeholder="Banka Adını Giriniz..." name="title">
                        <?php if(isset($form_error)){ ?> <!--  Eğer bir hata varsa mesaj yazdırıyoruz -->
                            <small class="input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>İban No</label>
                        <input class="form-control" placeholder="İban numaranızı giriniz" name="iban">
                        <?php if(isset($form_error)){ ?> <!--  Eğer bir hata varsa mesaj yazdırıyoruz -->
                            <small class="input-form-error"> <?php echo form_error("iban"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label>Banka Adı</label>
                        <input class="form-control" placeholder="Hesap numaranızı giriniz" name="hesapno">
                        <?php if(isset($form_error)){ ?> <!--  Eğer bir hata varsa mesaj yazdırıyoruz -->
                            <small class="input-form-error"> <?php echo form_error("hesapno"); ?></small>
                        <?php } ?>
                    </div>



                    <button type="submit" class="btn btn-primary btn-xs btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("bank"); ?>" class="btn btn-xs btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>