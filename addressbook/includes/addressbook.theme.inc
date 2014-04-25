<?php
function theme_upload_thumb($variables) {
  $element = $variables['element'];
  if (isset($element['#file']->uri)) {
    $output  = $element['#prefix'];
    $output .= '<div class="form-item form-type-managed-file form-item-photo">';
    $output .= '<img src="' . image_style_url('contact_preview', $element['#file']->uri) . '">';
    $output .= '<input type="submit" id="edit-' . $element['#name'] . '-remove-button" name="' . $element['#name'] . '_remove_button" value="Remove" class="form-submit ajax-processed">';
    $output .= '<input type="hidden" name="' . $element['#name'] . '[fid]" value="' . $element['#file']->fid . '">';
    $output .= '</div>';
    $output .= $element['#suffix'];
    return $output;
  }
}