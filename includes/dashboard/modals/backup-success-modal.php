<?php

  // Namespace
  namespace BMI\Plugin\Dashboard;

  // Exit on direct access
  if (!defined('ABSPATH')) exit;

  // Tooltips
  $ctl = __("Your account on Wordpress.org (where you open a new support thread) is different to the one you login to your WordPress dashboard (where you are now). If you don’t have a WordPress.org account yet, please sign up at the top right on the Support Forum page, and then scroll down on that page . It only takes a minute :) Thank you!", 'backup-backup');

?>

<div class="modal" id="backup-success-modal">

  <div class="modal-wrapper no-hpad" style="max-width: 900px; max-width: min(900px, 80vw)">
    <div class="modal-content">

      <div class="mms mm60 f30 bold center black"><?php _e('Backup successful!', 'backup-backup') ?></div>

      <div class="center mm60 mbl mtl">
        <img src="<?php echo $this->get_asset('images', 'checked64px.png'); ?>" alt="happy-img">
      </div>

      <div id="accessible-at-section" class="mm60">
        <div class="mms mbl">
          <div class="f18 mbll mtl">
            <?php _e('Your backup is now accessible at:', 'backup-backup') ?>
          </div>
          <div class="cf success-copy-input">
            <input type="text" id="text-input-copy" readonly class="left f18">
            <a href="#" class="btn inline btn-with-img btn-img-low-pad btn-pad left bmi-copper" data-copy="text-input-copy">
              <div class="text">
                <img src="<?php echo $this->get_asset('images', 'copy-icon.png'); ?>" alt="copy-img">
                <div class="f18 semibold"><?php _e('Copy', 'backup-backup') ?></div>
              </div>
            </a>
          </div>
        </div>

        <div class="mms f18 mtl lh30">
          <?php _e('To migrate your site, just copy above link, install the same plugin on the target site, go to the Restore Backups - tab, and paste the link there.', 'backup-backup') ?>
        </div>
      </div>

      <div class="mms mtl flex-here lh50 mm60">
        <div class="f18 align-left">
          <a href="#" class="nlink hoverable" id="download-backup-url" download><?php _e('Download backup', 'backup-backup') ?></a>
        </div>

        <div class="center">
          <a href="#" class="btn inline btn-pad modal-closer grey-btn nplr" data-close="backup-success-modal">
            <div class="text">
              <div class="f18 semibold"><?php _e('Close window', 'backup-backup') ?></div>
            </div>
          </a>
        </div>

        <div class="f18 inline align-right">
          <a href="#" class="nlink hoverable download-backup-log-url" download="backup_logs.txt">
            <?php _e('Download logs', 'backup-backup') ?>
          </a>
        </div>
      </div>

    </div>
  </div>

</div>
