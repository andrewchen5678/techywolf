<?php
//Adsense
$option_adsense = get_option('gingeradsense');
if($option_adsense && $option_adsense['activated'] == 1):
    require_once('ginger.adsense.php');
endif;

add_action("ginger_addon_activation_page", "ginger_adsense_activation_page");

function ginger_adsense_activation_page()
{
    $appname = "adsense";
    $app_data = ginger_app_data($appname);
    $option_ginger_analitics = get_option('gingeradsense');
    ?>

    <div class="ginger-addon">
    <table class="form-table striped">
        <thead>
        <tr>
            <td colspan="2">
                <img class="ginger-thumb" src="<?php echo $app_data["thumb"]; ?>" />
                <h3><?php _e("Google AdSense", "ginger"); ?>
                    <?php
                    ginger_app_price($appname, $app_data);
                    ?></h3>
                <small><?php _e("This add-on blocks cookies and ads created by Google AdSense, until user's acceptation.", "ginger"); ?></small>
                <br style="clear: both" />
                <p>
                    <a href="http://www.ginger-cookielaw.com/prodotto/<?php echo $appname; ?>/" target="_BLANK" class="button button-primary" <?php if($option_ginger_analitics && $option_ginger_analitics['activated'] == 1){ echo "disabled='disabled' "; } ?>><?php _e("Get Activation Code", "ginger"); ?></a>
                </p>
            </td>
        </tr>
        </thead>
        <tbody>
        <tr>

            <td>
                <fieldset>
                    <legend class="screen-reader-text"><span><?php _e("Google AdSense", "ginger"); ?></span></legend>
                    <p>
                        <label>
                            <?php _e("Active add-on", "ginger");?>:&nbsp;
                        </label>
                        <?php if ($option_ginger_analitics && $option_ginger_analitics['activated'] == 1): ?>
                        <img id="img_google_analytics"
                             src="<?php echo plugins_url('/ginger/img/ok.png'); ?>"
                             style="max-width: 20px; max-height: 20px; vertical-align: middle">

                    <form method="get" action="<?php echo admin_url('admin.php?page=ginger-add-on'); ?>">
                        <input type="hidden" name="page" value="ginger-add-on">
                        <input id="activationcode" type="text" name="activationcode"
                               value="<?php echo $option_ginger_analitics['licence_key']; ?>" placeholder=""
                               size="30px">
                        <input id="activationmail" type="text" name="activationmail"
                               value="<?php echo $option_ginger_analitics['email']; ?>" placeholder="" size="30px">
                        <input type="hidden" name="product_id" value="gingeradsense">
                        <input type="hidden" name="request" value="deactivation">
                        <input type="submit" class="button" value="<?php _e('Deactivate', 'ginger') ?>">
                    </form>
                    <?php else: ?>
                        <img id="img_google_analytics"
                             src="<?php echo plugins_url('/ginger/img/xx.png'); ?>"
                             style="max-width: 20px; max-height: 20px; vertical-align: middle">
                        <form method="get" action="<?php echo admin_url('admin.php?page=ginger-add-on'); ?>">
                            <input type="hidden" name="page" value="ginger-add-on">
                            <input id="activationcode" type="text" name="activationcode" value=""
                                   placeholder="<?php _e('Insert here the add-on activation code.', 'ginger') ?>"
                                   size="30px">
                            <input id="activationmail" type="text" name="activationmail" value=""
                                   placeholder="<?php _e('Insert here your activation mail.', 'ginger') ?>" size="30px">
                            <input type="hidden" name="product_id" value="gingeradsense">
                            <input type="hidden" name="request" value="activation">
                            <input type="submit" class="button" value="<?php _e('Activate', 'ginger') ?>">
                        </form>
                    <?php endif; ?>
                    </p>
                </fieldset>
            </td>
        </tr>

        </tbody>
    </table>
    </div>
<?php

}