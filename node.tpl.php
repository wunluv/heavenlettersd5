<div class="<?php print $node_classes ?> node-<?php print $node->type ?>" id="node-<?php print $node->nid; ?>">
  <?php if (!$page): ?>
    <h2 class="title">
      <a href="<?php print $node_url ?>"><?php print $title; ?></a>
    </h2>
  <?php endif; ?>

  <?php if (!empty($picture)): ?>
    <?php print $picture; ?>
  <?php endif; ?>

  <?php if (!empty($submitted)): ?>
    <span class="submitted"><?php print t('Posted ') . format_date($node->created, 'custom', "F jS, Y") . t(' by ') . theme('username', $node); ?></span>
  <?php endif; ?>

  <div class="content <?php print $node->type ?>">
    <?php print $content; ?>
  </div>

  <?php if (!empty($terms) && $page): ?>
    <div class="taxonomy"><?php print t(' Related Topics ') . $terms ?></div>
  <?php endif; ?>

  <?php if (!empty($links) && !$is_front): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</div>