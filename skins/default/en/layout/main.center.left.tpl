{* vim: set ts=2 sw=2 sts=2 et: *}

{**
 * Left sidebar
 *
 * @author    Creative Development LLC <info@cdev.ru>
 * @copyright Copyright (c) 2011-2012 Creative Development LLC <info@cdev.ru>. All rights reserved
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.litecommerce.com/
 *
 * @ListChild (list="layout.main.center", weight="100")
 *}

<div id="sidebar-first" class="column sidebar" IF="isSidebarFirstVisible()">
  <div class="section">
    <list name="sidebar.first" />
  </div>
</div>
