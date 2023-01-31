<?php

  // Namespace
  namespace BMI\Plugin\Dashboard;

  // Exit on direct access
  if (!defined('ABSPATH')) exit;

?>

<div class="collapser ignorehov section-bmi shadow section-bmi" group="quick-migration">
  <div class=" center header f20 pointer ignorehov transition heading-sq"><span class="bold"><?php _e('Migrar Wordpress', 'backup-backup') ?></span></div>
  <div class="content">

    <div class="content-above">

      <div class="f16 medium text-heading">
        <?php _e('Paste here the url you got after creating a backup:', 'backup-backup') ?>
      </div>

      <input type="text" id="bm-d-url" placeholder="<?php _e('E.g.', 'backup-backup') ?> https://your-site.com/?backup=bmi_backup.zip&secret" class="light">

      <div class="center">
        <button type="button" id="quick-download-migration" class="f16 semibold with-icon centred">
          <div class="for-img">
            <img src="<?php echo $this->get_asset('images', 'restore-now-icon-min.png'); ?>" alt="restore-img">
            <span><?php _e('Restore now!', 'backup-backup') ?></span>
          </div>
        </button>
      </div>
    </div>
  </div>
</div>
