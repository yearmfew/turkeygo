<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			Turlar
			<a href="<?php echo base_url("tours/new_form"); ?>" class="btn btn-outline btn-primary btn-md pull-right text-center"> <i class="fa fa-plus"></i> Yeni Tur Ekle</a>
		</h4>
	</div><!-- END column -->

	<div class="col-md-12 col-sm-12">
		<div class="widget p-lg">
			<?php if (empty($items)) { ?>
				<div class="alert alert-info text-center">
					<p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("tours/new_form"); ?>" >tıklayınız</a></p>
				</div>
			<?php } else { ?>
				<div class="table-responsive">
					
					
					<table class="table table-hover table-striped table-bordered content-container">
						<thead>
							<th class="order"><i class="fa fa-reorder"></i></th>
							<th class="w50">#id</th>
							<th class="w150">Tur Adı</th>
							<th class="w100">City</th>
							<th class="w100">Date</th>
							<th>Tur Tipi</th>													
							<th class="w50">Durumu</th>
							<th>İşlemler</th>
						</thead>
						<tbody class="sortable" data-url ="<?php echo base_url("tours/rankSetter"); ?>">
							<?php foreach ($items as $item) { ?>
								<tr id="ord-<?php echo $item->id; ?>">
									<th class="order"><i class="fa fa-reorder"></i></th>
									<td><?php echo $item->id; ?> </td>
									<td ><?php echo $item->title; ?></td>
									<!-- <td><?php echo $item->url; ?></td> -->
									<td ><?php echo $item->city; ?></td>								
									<td ><?php echo $item->date; ?></td>								
									<td ><?php echo $item->tour_type; ?>	</td>
									<td class="text-center">			
										<input 
										data-url = "<?php echo base_url("tours/isActiveSetter/$item->id"); ?>"
										class="isActive"
										type="checkbox" 
										data-size="small"
										data-switchery 
										data-color="#10c469" 
										<?php echo ($item ->isActive) ? "checked" : ""; ?>
										/>
									</td>
									<td class="">
										<a href="<?php echo base_url("tours/update_form/$item->id"); ?> " class="btn btn-xs btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>Düzenle</a>
										<a href="<?php echo base_url("tours/image_form/$item->id"); ?> " class="btn btn-xs btn-dark btn-outline"><i class="fa fa-image"></i>Tour Images</a>
										<button
										data-url="<?php echo base_url("tours/delete/$item->id"); ?>"
										class="btn btn-xs btn-danger btn-outline remove-btn">
										<i class="fa fa-trash"></i> Sil
									</button>
									
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } ?>
		</div>
	</div><!-- .widget -->
	<a href="<?php echo base_url("tours/new_form"); ?>" class="btn btn-outline btn-primary btn-md btn-block text-center"> <i class="fa fa-plus"></i> Yeni Tur Ekle</a> <br>
</div><!-- END column -->

</div>