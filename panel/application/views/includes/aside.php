<?php $user = get_active_user(); ?>
<aside id="menubar" class="menubar light">
  <div class="app-user">
    <div class="media">
      <div class="media-left">
        <div class="avatar avatar-md avatar-circle">
          <a href="javascript:void(0)"><img class="img-responsive" src="<?php echo base_url('assets'); ?>/assets/images/221.jpg" alt="avatar"/></a>
        </div><!-- .avatar -->
      </div>
      <div class="media-body">
        <div class="foldable">
          <h5><a href="javascript:void(0)" class="username"><?php echo $user->full_name; ?></a></h5>
          <ul>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>İşlemler</small>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu animated flipInY">
                <li>
                  <a class="text-color" href="<?php echo base_url(); ?>">
                    <span class="m-r-xs"><i class="fa fa-home"></i></span>
                    <span>Anasayfa</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="<?php echo base_url("users/update_form/$user->id"); ?>">
                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                    <span>Kullanıcı Ayarları</span>
                  </a>
                </li>
                <li>
                  <a class="text-color" href="#">
                    <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                    <span>Settings</span>
                  </a>
                </li>
                
                <li role="separator" class="divider"></li>
                <li>
                  <a class="text-color" href="<?php echo base_url("logout"); ?>">
                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                    <span>Çıkış</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div><!-- .media-body -->
    </div><!-- .media -->
  </div><!-- .app-user -->

  <div class="menubar-scroll">
    <div class="menubar-scroll-inner">
      <ul class="app-menu">

       <li>
        <a href="documentation.html">
          <i class="menu-icon zmdi zmdi-view-web zmdi-hc-lg"></i>
          <span class="menu-text">Siteyi Görüntüle</span>
        </a>
      </li>

      <li>
        <a href="<?php echo base_url("Dashboard"); ?>">
          <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
          <span class="menu-text">Dashboard</span>
        </a>
      </li>

      <li>
        <a href="<?php echo base_url("tours"); ?>">
          <i class="menu-icon fa fa-suitcase"></i>
          <span class="menu-text">Turlar</span>
        </a>
      </li>

      <li>
        <a href="javascript:void(0)">
          <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
          <span class="menu-text">Settings</span>
        </a>
      </li>
      

      <li>
        <a href="<?php echo base_url("socialMedia"); ?> ">
          <i class="menu-icon zmdi zmdi-accounts-alt zmdi-hc-lg"></i>
          <span class="menu-text">Sosyal Medya</span>
        </a>
      </li>


      <li>
        <a href="<?php echo base_url("bank"); ?>">
          <i class="menu-icon fa fa-bank"></i>
          <span class="menu-text">Bankalar</span>
        </a>
      </li>


      <li>
        <a href="<?php echo base_url("users"); ?>" >
         <i class="menu-icon fa fa-user-secret"></i>
         <span class="menu-text">Kullanıcılar</span>
       </a>
     </li>





      <li>
        <a href="<?php echo base_url("product"); ?>">
          <i class="menu-icon fa fa-cubes"></i>
          <span class="menu-text">Ürünler</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url("news"); ?>" >
          <i class="menu-icon fa fa-newspaper-o"></i>
          <span class="menu-text">Haberler</span>
        </a>
      </li>



   </ul><!-- .app-menu -->
 </div><!-- .menubar-scroll-inner -->
</div><!-- .menubar-scroll -->
</aside>