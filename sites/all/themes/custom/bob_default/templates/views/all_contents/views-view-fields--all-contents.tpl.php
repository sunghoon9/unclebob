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

/*
fields id
field_skill_category
field_image
title
body
picture
name
field_tag
*/

// Get Author Data //
$author_uid = $row->_field_data['nid']['entity']->uid;
// foreach($fields as $id => $field) {
//   drupal_set_message('<pre>'. print_r($id, true) .'</pre>');
// }
?>
<div class="ribbon_category">
  <!-- Begin : Category -->
  <?php if(array_key_exists('field_skill_category', $fields) && $fields['field_skill_category']): ?>
  <?php print $fields['field_skill_category']->wrapper_prefix; ?>
    <?php print $fields['field_skill_category']->label_html; ?>
    <?php print $fields['field_skill_category']->content; ?>
  <?php print $fields['field_skill_category']->wrapper_suffix; ?>
  <?php endif; ?>
  <!-- End : Category -->
</div>

<!-- Begin : Field Image -->
<?php if(array_key_exists('field_image', $fields) && $fields['field_image']): ?>
<?php print $fields['field_image']->wrapper_prefix; ?>
  <?php print $fields['field_image']->label_html; ?>
  <?php print $fields['field_image']->content; ?>
<?php print $fields['field_image']->wrapper_suffix; ?>
<?php endif; ?>
<!-- End : Field Image -->

<div class="row_content clearfix">
  <!-- Begin : Title -->
  <?php if(array_key_exists('title', $fields) && $fields['title']): ?>
  <?php print $fields['title']->wrapper_prefix; ?>
    <?php print $fields['title']->label_html; ?>
    <?php print $fields['title']->content; ?>
  <?php print $fields['title']->wrapper_suffix; ?>
  <?php endif; ?>
  <!-- End : Title -->

  <!-- Begin : Title -->
  <?php if(array_key_exists('body', $fields) && $fields['body']): ?>
  <?php print $fields['body']->wrapper_prefix; ?>
    <?php print $fields['body']->label_html; ?>
    <?php print $fields['body']->content; ?>
  <?php print $fields['body']->wrapper_suffix; ?>
  <?php endif; ?>
  <!-- End : Title -->
</div>

<div class="author clearfix">
  <!-- Begin : Picture -->
  <?php if(array_key_exists('picture', $fields) && $fields['picture']): ?>
  <?php print $fields['picture']->wrapper_prefix; ?>
    <?php print $fields['picture']->label_html; ?>
    <?php print $fields['picture']->content; ?>
  <?php print $fields['picture']->wrapper_suffix; ?>
  <?php endif; ?>
  <!-- End : Picture -->

  <div class="info clearfix">
    <!-- Begin : Name -->
    <?php if(array_key_exists('name', $fields) && $fields['name']): ?>
    <?php print $fields['name']->wrapper_prefix; ?>
      <?php print $fields['name']->label_html; ?>
      <?php print $fields['name']->content; ?>
    <?php print $fields['name']->wrapper_suffix; ?>
    <?php endif; ?>
    <!-- End : Name -->

    <!-- Begin : Created -->
    <?php if(array_key_exists('created', $fields) && $fields['created']): ?>
    <?php print $fields['created']->wrapper_prefix; ?>
      <?php print $fields['created']->label_html; ?>
      <?php print $fields['created']->content; ?>
    <?php print $fields['created']->wrapper_suffix; ?>
    <?php endif; ?>
    <!-- End : Created -->
  </div>
</div>

<?php
// Tags Raw data //
$field_tag = $row->_field_data['nid']['entity']->field_tag;
?>
<?php if(array_key_exists('field_tag', $fields) && array_key_exists('und', $field_tag)): ?>
<div class="row_footer clearfix">
  <!-- Begin : Tag -->
  <?php print $fields['field_tag']->wrapper_prefix; ?>
    <?php print $fields['field_tag']->label_html; ?>
    <?php print $fields['field_tag']->content; ?>
  <?php print $fields['field_tag']->wrapper_suffix; ?>
  <!-- End : Tag -->
</div>
<?php endif; ?>
