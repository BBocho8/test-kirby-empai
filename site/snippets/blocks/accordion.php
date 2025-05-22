<div class="text-red-500 accordion">
  <?php foreach ($block->items()->toStructure() as $item): ?>
    <details>
      <summary>
        <?= $item->summary() ?>
      </summary>
      <?= $item->details() ?>
    </details>
  <?php endforeach ?>
</div>