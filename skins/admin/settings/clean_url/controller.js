/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function CleanURLSwitcher () {
  jQuery('#clean-url-flag').change(function (event)
  {
    event.stopImmediatePropagation();

    core.get(
      URLHandler.buildURL({
        target: 'settings',
        page: 'Environment',
        action: 'switch_clean_url'
      })
    ).done(function (data) {
      if (false === data['Success']) {
        jQuery('.clean-url-setting-error-msg').html(data['Error']['msg']);
        jQuery('.clean-url-setting-error-body').html(data['Error']['body']);
        jQuery('#clean-url-flag').prop('checked', false);
      }else{
        jQuery('.clean-url-setting-error-msg').html('');
        jQuery('.clean-url-setting-error-body').html('');
        core.trigger('message', {
          type: 'info',
          message: data['NewState'] ? core.t('Clean URLs are enabled') : core.t('Clean URLs are disabled')
        });

        if (data['NewState']) {
          $('.model-properties fieldset:not(:first)').show();
        } else {
          $('.model-properties fieldset:not(:first)').hide();
        }
      }
      //'Clean URLs functionality may not be enabled. More info');
    });

    return false;
  });

  if (jQuery('#clean-url-flag').prop('checked')) {
    $('.model-properties fieldset:not(:first)').show();
  } else {
    $('.model-properties fieldset:not(:first)').hide();
  }
}

core.autoload(CleanURLSwitcher);