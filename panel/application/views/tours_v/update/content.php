
<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo $item->title; ?> adlı turu düzenliyorsunuz...
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("tours/update/$item->id"); ?>" method="post" >
                    <div class="form-group">
                        <label>Tur Adı</label>
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                        <input class="form-control" placeholder="Tur Adını Giriniz" name="title" value="<?php echo $item->title; ?>">

                    </div>
                    <div class="form-group">
                        <label for="control-demo-6" class="">Tur Tipi</label>
                        <div id="control-demo-6" class="" >
                            <select class="form-control" name="tour_type">
                                <option <?php echo (isset($item->tour_type) && $item->tour_type == "akdeniz") ? "selected" : ""; ?> >akdeniz turu</option>
                             <option <?php echo (isset($item->tour_type) && $item->tour_type == "karadeniz") ? "selected" : ""; ?> >Karadeniz turu</option>
                             <option <?php echo (isset($item->tour_type) && $item->tour_type == "islamic") ? "selected" : ""; ?> >islamic tur</option>


                         </select>
                     </div>
                 </div>
                 <div class="form-group">
                    <label>In Brief</label>
                    <?php if(isset($form_error)){ ?>
                        <small class="pull-right input-form-error"> <?php echo form_error("inbrief"); ?></small>
                    <?php } ?>
                    <textarea
                    name="inbrief" 
                    class="m-0" 
                    data-plugin="summernote" 
                    data-options="{height: 100}"

                    > <?php echo $item->inbrief; ?> </textarea>


                    <label>Date</label>
                    <?php if(isset($form_error)){ ?>
                        <small class="pull-right input-form-error"> <?php echo form_error("date"); ?></small>
                    <?php } ?>
                    <input class="form-control" value="<?php echo $item->date; ?>" name="date">

                </div>   
                <div class="form-group">
                    <label>Country</label>
                    <?php if(isset($form_error)){ ?>
                        <small class="pull-right input-form-error"> <?php echo form_error("country"); ?></small>
                    <?php } ?>
                    <input class="form-control" value="<?php echo $item->country; ?>" name="country">

                </div>

                <div class="form-group">
                    <label>City</label>
                    <?php if(isset($form_error)){ ?>
                        <small class="pull-right input-form-error"> <?php echo form_error("city"); ?></small>
                    <?php } ?>
                    <input class="form-control" value="<?php echo $item->city; ?>" name="city">

                </div>
                <div class="form-group">
                    <label>Duration</label>
                    <?php if(isset($form_error)){ ?>
                        <small class="pull-right input-form-error"> <?php echo form_error("duration"); ?></small>
                    <?php } ?>
                    <input class="form-control" value="<?php echo $item->duration; ?>" name="duration">

                </div>
                <div class="form-group">
                    <label>Start And End</label>
                    <?php if(isset($form_error)){ ?>
                        <small class="pull-right input-form-error"> <?php echo form_error("startEnd"); ?></small>
                    <?php } ?>
                    <input class="form-control" value="<?php echo $item->startEnd; ?>" name="startEnd">

                </div>
                <div class="form-group">
                    <label>Hotels</label>
                    <?php if(isset($form_error)){ ?>
                        <small class="pull-right input-form-error"> <?php echo form_error("hotels"); ?></small>
                    <?php } ?>
                    <input class="form-control" value="<?php echo $item->hotels; ?>" name="hotels">

                </div>
                <div class="form-group">
                    <label>Meals</label>
                    <?php if(isset($form_error)){ ?>
                        <small class="pull-right input-form-error"> <?php echo form_error("meals"); ?></small>
                    <?php } ?>
                    <input class="form-control" value="<?php echo $item->meals; ?>" name="meals">

                </div>





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
                <?php echo $item->itinerary; ?>
            </textarea>

        </div>
        <div class="form-group">
            <label for="control-demo-6" class="">Tur Ayrıntılarını Nasıl Girmek İstersiniz?</label>
            <div id="control-demo-6" class="">
                <select class="form-control detail_type_select" name="detail_type">
                    <option <?php echo (isset($item->detail_type) && $item->detail_type == "auto") ? "selected" : ""; ?> value="auto">Otomatik oluştur</option>
                    <option <?php echo (isset($item->detail_type) && $item->detail_type == "manual") ? "selected" : ""; ?> value="manual">Kendim gireceğim</option>
                    <option <?php echo (isset($item->detail_type) && $item->detail_type == "overwrite") ? "selected" : ""; ?> value="overwrite">Ekstra bilgi gireceğim</option>

                </select>
            </div>
        </div><!-- .form-group -->

        <?php if(isset($form_error)){ ?>

       <div class="form-group auto_container" style="display: <?php echo ($detail_type == "auto") ? "block" : "none"; ?>">

                   <input type="text" readonly name="auto" class="form-control" placeholder="Tur ayrıntıları inbrief ve itinerary bölümlerinin birleşiminden oluşturulacaktır.">
               </div>


            <div class="form-group manual_container" style="display: <?php echo ($item->detail_type == "manual") ? "block" : "none"; ?>" >    
                <label>Tur Ayrıntıları</label>
                <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("manual_tour_details"); ?></small>
                <?php } ?> 
                <textarea name="manual_tour_details" class="m-0" data-plugin="summernote"   data-options="{height: 250}"> 
                    <?php echo $item->all_details; ?></textarea>

                </div>

                <div class="form-group overwrite_container" style="display: <?php echo ($item->detail_type == "overwrite") ? "block" : "none"; ?>">   
                  <label>Tur Ayrıntıları</label>
                  <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("overwrite_tour_details"); ?></small>
                <?php } ?>
                <textarea name="overwrite_tour_details" class="m-0" data-plugin="summernote"  data-options="{height: 250}"></textarea>

            </div>
        <?php } else { ?>

            <div class="form-group auto_container">
             <textarea name="auto" class="m-0" data-plugin="summernote"   data-options="{height: 250}"> 
                <?php echo $item->all_details; ?></textarea>
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
    <button type="submit" class="btn btn-primary btn-xs btn-outline">Güncelle</button>
    <a href="<?php echo base_url("tours"); ?>" class="btn btn-xs btn-danger btn-outline">İptal</a>
</form>
</div><!-- .widget-body -->
</div><!-- .widget -->
</div><!-- END column -->
</div>