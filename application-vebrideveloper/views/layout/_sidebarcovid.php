<!--Category name-->
<li class="list-header">COVID-19</li>
<?php if($this->uri->segment('1') == 'Covid19byvebriINDONESIA'){ ?>
<li class="active-sub">
    <a href="<?php echo base_url('Covid19byvebriINDONESIA'); ?>">
        <i class="ti-signal"></i>
        <span class="menu-title">	Indonesia </span>
    </a>
</li>
<?php } else{ ?>
  <li>
      <a href="<?php echo base_url('Covid19byvebriINDONESIA'); ?>">
          <i class="ti-signal"></i>
          <span class="menu-title">	Indonesia </span>
      </a>
  </li>
<?php } ?>

<?php if($this->uri->segment('1') == 'Covid19byvebriGLOBAL'){ ?>
<li class="active-sub">
    <a href="<?php echo base_url('Covid19byvebriGLOBAL'); ?>">
        <i class="ion-earth"></i>
        <span class="menu-title">	Global </span>
    </a>
</li>
<?php } else{ ?>
  <li>
      <a href="<?php echo base_url('Covid19byvebriGLOBAL'); ?>">
          <i class="ion-earth"></i>
          <span class="menu-title">	Global </span>
      </a>
    </li>
  <?php } ?>
<li class="list-divider"></li>
