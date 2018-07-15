
<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Tur Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("tours/save"); ?>" method="post" >
                    <div class="form-group">
                        <label>Tur Adı</label>
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                        <input class="form-control" placeholder="Tur Adını Giriniz" name="title">

                    </div>
                    <div class="form-group">
                        <label for="control-demo-6" class="">Tur Tipi</label>
                        <div id="control-demo-6" class="" >
                            <select class="form-control tour_type" name="tour_type">
                                <!--  yeni tur tipi ekle butonu olacak. bu butona tıklayınca  -->

                                <option>akdeniz turu</option>
                                <option>Karadeniz turu</option>
                                <option>islamic tur</option>



                            <!--     <?php foreach ($items as $item) {  ?>
                                    <option class="selectone" ><?php echo $item->tour_type; ?>
                                </option>

                                <?php } ?> -->



                                <!--             <option value="new">yeni ekle</option>  -->
                            </select>
                        </div>
        <!--             <br>
            <input type="text" name="tour_type_written" class="newtype"> -->




        </div>
        <div class="form-group">
            <label>Highlights</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("highlights"); ?></small>
            <?php } ?>
            <textarea
            name="highlights" 
            class="m-0" 
            data-plugin="summernote" 
            data-options="{height: 100}"
            >  </textarea>

        </div>
        <div class="form-group">
            <label>Date</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("date"); ?></small>
            <?php } ?>
            <input class="form-control" placeholder="Tur tarihini giriniz" name="date">

        </div>   
        <div class="form-group">
            <label>Country</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("country"); ?></small>
            <?php } ?>
            <input class="form-control" placeholder="Turun yapılaağı ülkeyi giriniz" name="country">

        </div>

        <div class="form-group">
            <label>City</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("city"); ?></small>
            <?php } ?>
            <input class="form-control" placeholder="Gidilecek şehri giriniz" name="city">

        </div>
        <div class="form-group">
            <label>Duration</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("duration"); ?></small>
            <?php } ?>
            <input class="form-control" placeholder="Tur süresini giriniz" name="duration">

        </div>
        <div class="form-group">
            <label>Start And End</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("startEnd"); ?></small>
            <?php } ?>
            <input class="form-control" placeholder="Start End bilgisi giriniz" name="startEnd">

        </div>
        <div class="form-group">
            <label>Hotels</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("hotels"); ?></small>
            <?php } ?>
            <input class="form-control" placeholder="Otel bilgilerini giriniz" name="hotels">

        </div>
        <div class="form-group">
            <label>Meals</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("meals"); ?></small>
            <?php } ?>
            <input class="form-control" placeholder="Yiyecek içecek bilgilerini giriniz" name="meals">

        </div>



        <div class="form-group">
            <label>Itinerary</label>
            <?php if(isset($form_error)){ ?>
                <small class="pull-right input-form-error"> <?php echo form_error("itinerary"); ?></small>
            <?php } ?>
            <textarea
            name="itinerary" 
            class="m-0" 
            data-plugin="summernote" 
            data-options="{height: 100}"
            >
        </textarea>

    </div>
    <div class="form-group">
        <label for="control-demo-6" class="">Tur Ayrıntılarını Nasıl Girmek İstersiniz?</label>
        <div id="control-demo-6" class="">
            <select class="form-control detail_type_select" name="detail_type">
                <option <?php echo (isset($detail_type) && $detail_type == "auto") ? "selected" : ""; ?> value="auto">Otomatik oluştur</option>
                <option <?php echo (isset($detail_type) && $detail_type == "manual") ? "selected" : ""; ?> value="manual">Kendim gireceğim</option>
                <option <?php echo (isset($detail_type) && $detail_type == "overwrite") ? "selected" : ""; ?> value="overwrite">Ekstra bilgi gireceğim</option>

            </select>
        </div>
    </div><!-- .form-group -->

    <?php if(isset($form_error)){ ?>

        <div class="form-group auto_container" style="display: <?php echo ($detail_type == "auto") ? "block" : "none"; ?>">

         <input type="text" readonly name="auto" class="form-control" placeholder="Tur ayrıntıları inbrief ve itinerary bölümlerinin birleşiminden oluşturulacaktır.">
     </div>

     <div class="form-group manual_container" style="display: <?php echo ($detail_type == "manual") ? "block" : "none"; ?>" >    
        <label>Tur Ayrıntıları</label>
        <?php if(isset($form_error)){ ?>
            <small class="pull-right input-form-error"> <?php echo form_error("manual_tour_details"); ?></small>
        <?php } ?> 
        <textarea name="manual_tour_details" class="m-0" data-plugin="summernote"   data-options="{height: 250}"></textarea>

    </div>

    <div class="form-group overwrite_container" style="display: <?php echo ($detail_type == "overwrite") ? "block" : "none"; ?>">   
      <label>Tur Ayrıntıları</label>
      <?php if(isset($form_error)){ ?>
        <small class="pull-right input-form-error"> <?php echo form_error("overwrite_tour_details"); ?></small>
    <?php } ?>
    <textarea name="overwrite_tour_details" class="m-0" data-plugin="summernote"  data-options="{height: 250}"></textarea>

</div>
<?php } else { ?>

    <div class="form-group auto_container">
        <input type="text" readonly name="auto" class="form-control"  >
    </div>

    <div class="form-group manual_container">
        <label>Tur Ayrıntıları</label>
        <?php if(isset($form_error)){ ?>
            <small class="pull-right input-form-error"> <?php echo form_error("manual_tour_details"); ?></small>
        <?php } ?>
        <textarea name="manual_tour_details" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>

    </div>
    <div class="form-group overwrite_container">
       <label>Tur Ayrıntıları</label>
       <textarea name="overwrite_tour_details" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
       <?php if(isset($form_error)){ ?>
        <small class="pull-right input-form-error"> <?php echo form_error("overwrite_tour_details"); ?></small>
    <?php } ?>
</div>
<?php } ?>
<button type="submit" class="btn btn-primary btn-xs btn-outline">Kaydet</button>
<a href="<?php echo base_url("tours"); ?>" class="btn btn-xs btn-danger btn-outline">İptal</a>
</form>
</div><!-- .widget-body -->
</div><!-- .widget -->
</div><!-- END column -->
</div>