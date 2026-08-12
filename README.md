[![Latest Stable Version](https://poser.pugx.org/paradoxlabs/tokenbase-hyva-checkout/v/stable)](https://packagist.org/packages/paradoxlabs/tokenbase-hyva-checkout)
[![License](https://poser.pugx.org/paradoxlabs/tokenbase-hyva-checkout/license)](https://packagist.org/packages/paradoxlabs/tokenbase-hyva-checkout)
[![Total Downloads](https://poser.pugx.org/paradoxlabs/tokenbase-hyva-checkout/downloads)](https://packagist.org/packages/paradoxlabs/tokenbase-hyva-checkout)

<p align="center">
    <a href="https://www.paradoxlabs.com"><img alt="ParadoxLabs" src="https://paradoxlabs.com/wp-content/uploads/2020/02/pl-logo-canva-2.png" width="250"></a>
</p>

Shared Hyvä compatibility assets for
[ParadoxLabs TokenBase](https://github.com/ParadoxLabs-Inc/tokenbase) payment methods.

This module is the common frontend layer that our gateway-specific Hyvä modules (such
as [CyberSource for Hyvä Checkout](https://github.com/ParadoxLabs-Inc/cybersource-hyva-checkout)) build on. It is
normally installed automatically as a dependency of those modules, not on its own.

Requirements
============

* Adobe Commerce / Magento Open Source 2.4.6 – 2.4.9 (or equivalent version of Adobe Commerce Cloud), or Mage-OS 2.0 – 3.0
* PHP 8.1, 8.2, 8.3, 8.4, or 8.5
* `hyva-themes/magento2-theme-module` >= 1.3.11
* `paradoxlabs/tokenbase` >= 4.0

Features
========

* Customer-account **Payment Options** (paymentinfo) page for Hyvä themes: a gateway-agnostic stored-card list
  with delete actions, covering every active TokenBase payment method
* Add/edit card form scaffolding — card details plus billing address fields — that gateway Hyvä modules plug
  into. Gateways register their method code with the `ViewModel\SupportedMethods` registry via frontend `di.xml`
  and supply their card-entry fields through a `hyva_customer_paymentinfo_index_{method}` layout handle;
  unregistered methods still get the card list and delete actions, only the add/edit pane is gated
* Payment-type-neutral form labels, with a `form_title` block argument override for gateways whose stored
  instruments aren't credit cards
* Registers the module with Hyvä's Tailwind purge configuration automatically (including symlinked-module dev
  setups), so its templates' classes survive CSS purging without theme changes

Installation and Usage
======================

This module is a dependency of our gateway Hyvä modules and will be installed with them by Composer. To install it
directly, run in SSH at your Magento base directory:

    composer require paradoxlabs/tokenbase-hyva-checkout
    php bin/magento module:enable ParadoxLabs_TokenBaseHyvaCheckout
    php bin/magento setup:upgrade

## Applying Updates

In SSH at your Magento base directory, run:

    composer update paradoxlabs/tokenbase-hyva-checkout
    php bin/magento setup:upgrade

These commands will download and apply any available updates to the module.

If you have any integrations or custom functionality based on this extension, we strongly recommend testing to ensure
they are not affected.

Changelog
=========

Please see [CHANGELOG.md](https://github.com/ParadoxLabs-Inc/tokenbase-hyva-checkout/blob/main/CHANGELOG.md).

Support
=======

This module is provided free and without support of any kind. You may report issues you've found in the module, and we
will address them as we are able, but **no support will be provided here.**

**DO NOT include any API keys, credentials, or customer-identifying information in issues, pull requests, or comments.
Any personally identifying information will be deleted on sight.**

If you need personal support services,
please [buy an extension support plan from ParadoxLabs](https://store.paradoxlabs.com/support-renewal.html), then open a
ticket at [support.paradoxlabs.com](https://support.paradoxlabs.com).

Contributing
============

Please feel free to submit pull requests with any contributions. We welcome and appreciate your support, and will
acknowledge contributors.

This module is maintained by ParadoxLabs, a Magento solutions provider. We make no guarantee of accepting contributions,
especially any that introduce architectural changes.

License
=======

This module is licensed
under [APACHE LICENSE, VERSION 2.0](https://github.com/ParadoxLabs-Inc/tokenbase-hyva-checkout/blob/main/LICENSE.md).
