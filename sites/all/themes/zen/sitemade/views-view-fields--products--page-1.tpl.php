<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php /*foreach ($fields as $id => $field): ?>
  <?php if (!empty($field->separator)): ?>
    <?php print $field->separator; ?>
  <?php endif; ?>

  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
  <?php print $field->wrapper_suffix; ?>
<?php endforeach;*/ ?>

<?php foreach ($fields as $id => $field): ?>
<?php 
     if($id=='sku'){$sku=$field->content;}
     if($id=='title'){$title=$field->content;}
     if($id=='field_image'){$field_image=$field->content;}
     if($id=='commerce_price'){$commerce_price=$field->content;}
     if($id=='commerce_stock'){$commerce_stock=$field->content;}
     if($id=='add_to_cart_form'){$add_to_cart_form=$field->content;}
?>
<?php endforeach; ?>

<div class="row-fluid margin_top_product txta_center">
  <div class="span2">
    <?php print $sku; ?>
  </div>
  <div class="span5 txta_left">
     <div class="row-fluid">
        <div class="bold"><?php print $title;?></div>
     </div>
     <div class="row-fluid">
       <div class="center m_t"><?php /*print $field_image;*/?></div>
     </div>
  </div>
  <div class="span5">
    <div class="row-fluid">
      <div class="span5">
        <?php /*print $commerce_stock;*/?>
      </div>
      <div class="span2"></div>
      <div class="span5">
        <?php print $commerce_price;?>
      </div> 
    </div>
    <div class="row-fluid">
       <?php print $add_to_cart_form;?>  
    </div>
  </div>
</div>
