<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Sosyal Medya Hesapları
            <a href="<?php echo base_url("socialMedia/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Eklenmiş herhangi bir sosyal medya hesabınız bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("socialMedia/new_form"); ?>">tıklayınız</a></p>
                </div>

            <?php } else { ?>

                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th class="order"><i class="fa fa-reorder"></i></th>
                        <th class="w50">#id</th>
                        <th>Platform Adı</th>
                        <th>Url</th>
                        <th>Durumu</th>
                        <th class="w150">İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url ="<?php echo base_url("socialMedia/rankSetter"); ?>" >

                        <?php foreach($items as $item) { ?>
                            <tr id="ord-<?php echo $item->id; ?>">
                                <th class="order"><i class="fa fa-reorder"></i></th>
                                <td class="w50 ">#<?php echo $item->id; ?></td>
                                <td><?php echo $item->title; ?></td>
                                <td><?php echo $item->url; ?></td>
                                <td class="text-center w100">
                                    <input
                                    data-url="<?php echo base_url("socialMedia/isActiveSetter/$item->id"); ?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-size="small"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class=" w50">
                                    <button
                                    data-url="<?php echo base_url("socialMedia/delete/$item->id"); ?>"
                                    class="btn btn-xs btn-danger btn-outline remove-btn">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                                <a href="<?php echo base_url("socialMedia/update_form/$item->id"); ?>" class="btn btn-xs btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        <?php } ?>

    </div><!-- .widget -->
</div><!-- END column -->
</div>