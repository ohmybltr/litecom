{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Invoice shipping methods
 *
 * @author    Creative Development LLC <info@cdev.ru>
 * @copyright Copyright (c) 2011-2012 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.litecommerce.com/
 *
 * @ListChild (list="invoice.bottom.methods", weight="10")
 *}
<td class="shipping" IF="getShippingModifier()&shippingModifier.getMethod()">
  <br />
  <strong>{t(#Shipping method#)}:</strong>
  {shippingModifier.method.getName():h}
</td>
