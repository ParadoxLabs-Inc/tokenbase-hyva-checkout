# ParadoxLabs_TokenBaseHyvaCheckout Changelog

## 1.0.1 - Sep 29, 2026

- Fixed Payment Options templates for Hyvä's CSP Alpine build: the delete confirmation, the address/payment steps,
  and the state/province and zip fields no longer use inline expressions or `x-model`, so they work under CSP.
- Fixed the add/edit form's address validation and billing summary reading from the clicked button instead of the
  form.

## 1.0.0 - Aug 12, 2026

Initial release: shared Hyvä compatibility layer for ParadoxLabs TokenBase payment methods.

- Customer-account Payment Options (paymentinfo) page for Hyvä themes: gateway-agnostic stored-card list and
  delete actions for all active TokenBase payment methods.
- Add/edit card form scaffolding (card details and billing address fields) that gateway Hyvä modules extend via
  the `SupportedMethods` registry and `hyva_customer_paymentinfo_index_{method}` layout handles; unregistered
  methods keep the list/delete view.
- Payment-type-neutral form labels with a `form_title` override for gateways.
- Automatic registration with Hyvä's Tailwind purge configuration, with symlink-safe module path resolution for
  development setups.
