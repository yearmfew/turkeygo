<div class="row">
	<div class="col-md-12">
		<h4 class="m-b-lg">
			Banka Listesi
			<a href="<?php echo base_url("bank/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
		</h4>
	</div><!-- END column -->

	<div class="col-md-12">
		<div class="widget p-lg">
			<?php if (empty($items)) { ?>
				<div class="alert alert-info text-center">
					<p>Eklenmiş herhangi bir banka bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("bank/new_form"); ?>" >tıklayınız</a></p>
				</div>
			<?php } else { ?>
				<table class="table table-hover table-striped table-bordered content-container">
					<thead>
						<th class="order"><i class="fa fa-reorder"></i></th>
						<th class="w50">#id</th>
						<th>Banka Adı</th>
						<th>Iban No</th>
						<th>Hesap No</th>
						<th>Durumu</th>
						<th>İşlemler</th>
					</thead>
					<tbody class="sortable" data-url ="<?php echo base_url("bank/rankSetter"); ?>">
						<?php foreach ($items as $item) { ?>
							<tr id="ord-<?php echo $item->id; ?>">
								<th class="order"><i class="fa fa-reorder"></i></th>
								<td><?php echo $item->id; ?> </td>
								<td><?php echo $item->title; ?></td>
								<td><?php echo $item->iban; ?></td>
								<td><?php echo $item->hesapno; ?></td>
								<td class="text-center">			
									<input 
									data-url = "<?php echo base_url("bank/isActiveSetter/$item->id"); ?>"
									class="isActive"
									type="checkbox" 
									data-size="small"
									data-switchery 
									data-color="#10c469" 
									<?php echo ($item ->isActive) ? "checked" : ""; ?>
									/>
								</td>
								<td class="text-center">
								<a href="<?php echo base_url("bank/update_form/$item->id"); ?> " class="btn btn-xs btn-info btn-outline"><i class="fa fa-pencil-square-o"></i>Düzenle</a>
									<button
									data-url="<?php echo base_url("bank/delete/$item->id"); ?>"
									class="btn btn-xs btn-danger btn-outline remove-btn">
									<i class="fa fa-trash"></i> Sil
								</button>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		<?php } ?>
	</div><!-- .widget -->
</div><!-- END column -->
</div>