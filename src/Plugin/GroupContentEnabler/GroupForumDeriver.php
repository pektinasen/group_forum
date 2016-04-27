<?php

/**
 * @file
 * Contains \Drupal\group_forum\Plugin\GroupContentEnabler\GroupForumDeriver.
 */

namespace Drupal\group_forum\Plugin\GroupContentEnabler;

use Drupal\Component\Plugin\Derivative\DeriverBase;
use Drupal\node\Entity\NodeType;
use Drupal\taxonomy\Entity\Term;
use Drupal\taxonomy\Entity\Vocabulary;

class GroupForumDeriver extends DeriverBase {

  /**
   * {@inheritdoc}.
   */
  public function getDerivativeDefinitions($base_plugin_definition) {
    drush_print_r($base_plugin_definition);
    foreach (Term::loadMultiple() as $tid => $term) {
      drush_print_r("taxonomy " . $tid);
      drush_print_r($term);
      $label = $term->label();

      $this->derivatives[$tid] = [
          'entity_bundle' => 'forum_' . $tid,
          'label' => t('Group Forum') . " ($label)",
          'description' => t('Adds %type to groups both publicly and privately.', ['%type' => $label]),
      ] + $base_plugin_definition;
    }
    return $this->derivatives;
  }
}
