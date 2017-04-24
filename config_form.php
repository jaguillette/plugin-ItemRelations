<div class="field">
    <div class="two columns alpha">
        <?php echo get_view()->formLabel('item_relations_public_append_to_items_show', __('Append to Public Items Show')); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            <?php
            echo __('Check this if you want to display an item\'s relations on '
                . 'its public show page.');
            ?>
        </p>
        <?php echo get_view()->formCheckbox('item_relations_public_append_to_items_show', null, array('checked' => $publicAppendToItemsShow)); ?>
    </div>
</div>
<div class="field">
    <div class="two columns alpha">
        <?php echo get_view()->formLabel('item_relations_relation_format', __('Relation Format')); ?>
    </div>
    <div class="inputs five columns omega">
        <p class="explanation">
            <?php
            echo __('Select the format of an item\'s relations that you would '
                . 'prefer to show. If one is unavailable the other will be used.');
            ?>
        </p>
        <?php echo get_view()->formSelect('item_relations_relation_format', $relationFormat, null, array('prefix_local_part' => 'prefix:localPart', 'label' => 'label')); ?>
    </div>
</div>
<div class="field">
  <div class="two columns alpha">
    <?php echo get_view()->formLabel('item_relations_display_title', __('Display Title')); ?>
  </div>
  <div class="inputs five columns omega">
    <p class="explanation">
      <?php
      echo __('Enter the title that you would like for the "Item Relations" '
          . 'display section. If left blank, this defaults to "Item Relations".');
      ?>
    </p>
    <?php echo get_view()->formText('item_relations_display_title', $relationTitle); ?>
  </div>
</div>
<div class="field">
  <div class="two columns alpha">
    <?php echo get_view()->formLabel('item_relations_show_type',__('Show Item Type')); ?>
  </div>
  <div class="inputs five columns omega">
    <p class="explanation">
      <?php
      echo __('Choose whether or not to include Item Types in the display'
          . ' of Item Relations');
      ?>
    </p>
    <?php echo get_view()->formCheckbox('item_relations_show_type',null,array('checked' => $showItemType)); ?>
  </div>
</div>
