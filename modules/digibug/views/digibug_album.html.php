<?php defined("SYSPATH") or die("No direct script access.") ?>
<div class="gDigibugPrintButton">
  <a class="gButtonLink ui-corner-all ui-state-default ui-icon-left"
     href="<?= url::site("digibug/print_photo/$id?csrf=$csrf") ?>"
     title="<?= p::clean($title) ?>">
    <span class="ui-icon ui-icon-print"><?= p::clean($title) ?></span>
  </a>
</div>
