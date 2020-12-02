<!-- Header and Nav -->
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </li>
  </ul>
  
<section class="top-bar-section">
 <ul class="right">
  <li> <a href="dashboard.php?page=profile" ><?php echo $info->uname; ?></a></li>
  <li><a href="dashboard.php?page=profile"><img src="img/<?php echo $info->uimgurl; ?>" width="38" height="38" class="round-img" alt="Image"/></a></li>
  <li class="has-dropdown"><a class="list-group-item" href="#"><i class="fa fa-cog fa-spin"></i>&nbsp; Settings</a>
        <ul class="dropdown">
            <li> <a href="dashboard.php?page=password"><i class="fi fi-lock"></i> &nbsp; Password</a></li>
            <li> <a href="dashboard.php?page=logout"><i class="fa fa-sign-out sancolor-white"></i> &nbsp; Logout</a></li>
        </ul></li>
        
  <li class="divider"></li>
  <li class="has-form">
        <div class="row collapse">
          <div class="large-8 small-9 columns"><input type="text" placeholder="Search"> </div>
          <div class="large-4 small-3 columns"><a href="#" class="success button expand"> <i class="fi fi-magnifying-glass"></i></a></div>
        </div>
      </li>
    </ul>
  </section>
</nav>

<!-- End Header and Nav --> 
