<?php
/**
 * @file
 * Contains \Drupal\group_forum\Plugin\GroupContentEnabler\GroupForum.
 */

namespace Drupal\group_forum\Plugin\GroupContentEnabler;

use Drupal\group\Entity\GroupInterface;
use Drupal\group\Plugin\GroupContentEnablerBase;
use Drupal\Core\Url;
/**
 * Provides a content enabler for forums.
 *
 * @GroupContentEnabler(
 *   id = "group_forum",
 *   label = @Translation("Group Forum"),
 *   description = @Translation("Adds forums to groups both publicly and privately."),
 *   entity_type_id = "taxonomy_term",
 *   path_key = "forums",
 *   deriver = "Drupal\group_forum\Plugin\GroupContentEnabler\GroupForumDeriver"
 * )
 */
class GroupForum extends GroupContentEnablerBase
{

//    /**
//     * {@inheritdoc}
//     */
//    public function getGroupOperations(GroupInterface $group)
//    {
//        $account = \Drupal::currentUser();
//        $operations = [];
//
//        if ($group->getMember($account)) {
//            if ($group->hasPermission('leave group', $account)) {
//                $operations['group-leave'] = [
//                    'title' => $this->t('Leave group'),
//                    'url' => new Url($this->getRouteName('leave-form'), ['group' => $group->id()]),
//                    'weight' => 99,
//                ];
//            }
//        } elseif ($group->hasPermission('join group', $account)) {
//            $operations['group-join'] = [
//                'title' => $this->t('Join group'),
//                'url' => new Url($this->getRouteName('join-form'), ['group' => $group->id()]),
//                'weight' => 0,
//            ];
//        }
//
//        return $operations;
//    }

//    /**
//     * {@inheritdoc}
//     */
//    public function getEntityForms() {
//        return ['group-forum-form' => 'Drupal\group_forum\Form\GroupForumForm'];
//    }

//    /**
//     * {@inheritdoc}
//     */
//    public function getPaths() {
//        $paths = parent::getPaths();
//
//        $type = $this->getEntityBundle();
//        $paths['add-forum'] = "/group/{group}/fourum/add/$type";
//        $paths['remove-form'] = "/group/{group}/forum/remove/$type";
//
//        return $paths;
//    }

//    /**
//     * {@inheritdoc}
//     *
//     * @see \Drupal\group_forum\Routing\GroupForumRouteProvider
//     */
//    public function getRouteName($name) {
//        if ($name == 'collection') {
//            return 'entity.group_content.group_forum.collection';
//        }
//        return parent::getRouteName($name);
//    }
}
