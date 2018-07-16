<?php $user = get_active_user(); ?>
<div class="row">
	<div class="col-md-3 col-sm-6">
		<div class="widget">
			<header class="widget-header">
				<h4 class="widget-title text-center">Hızlı Tur Ekle </h4>
			</header><!-- .widget-header -->
			<hr class="widget-separator">
			<div class="widget-body text-center">
				<div class="big-icon m-b-md watermark"><i class="fa fa-5x fa-suitcase"></i></div>
				
				<p class="text-muted m-b-lg">Turlarınızı buradan kolayca ekleyebilirsiniz, daha fazla işlem için yandaki menüyü kullanabilirsiniz..</p>
				<a href="<?php echo base_url("tours/new_form"); ?>" class="btn btn-outline rounded btn-purple">Tur Ekle</a>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div>

	<div class="col-md-3 col-sm-6">
		<div class="widget">
			<header class="widget-header">
				<h4 class="widget-title text-center">Kullanıcı Ayar Düzenle </h4>
			</header><!-- .widget-header -->
			<hr class="widget-separator">
			<div class="widget-body text-center">
				<div class="big-icon m-b-md watermark"><i class="fa fa-5x fa-user"></i></div>
				
				<p class="text-muted m-b-lg">Kullanıcı bilgilerinizi buradan hızlıca düzenleyebilir, daha fazla işlem için soldaki menüyü kullanabilirsiniz.</p>
				<a href="<?php echo base_url("users/update_form/$user->id"); ?>" class="btn btn-outline rounded btn-purple">Kullanıcı Ayarları</a>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div>

	<div class="col-md-3 col-sm-6">
		<div class="widget">
			<header class="widget-header">
				<h4 class="widget-title text-center">About us Page</h4>
			</header><!-- .widget-header -->
			<hr class="widget-separator">
			<div class="widget-body text-center">
				<div class="big-icon m-b-md watermark"><i class="fa fa-5x fa-building-o"></i></div>
				
				<p class="text-muted m-b-lg">About us(hakkımızda) sayfası içeriğini buradan düzenleyebilirsiniz. Düzenlemek için tıklayın..</p>
				<a href="<?php echo base_url("about"); ?>" class="btn btn-outline rounded btn-purple">About Düzenle</a>
			</div><!-- .widget-body -->
		</div><!-- .widget -->
	</div>




</div>