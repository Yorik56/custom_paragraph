<?php

namespace Drupal\custom_paragraph\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for custom_paragraph routes.
 */
class CustomParagraphController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
