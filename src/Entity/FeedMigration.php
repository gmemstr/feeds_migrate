<?php

namespace Drupal\feeds_migrate\Entity;

use Drupal\migrate_plus\Entity\Migration;

/**
 * Defines the Feed Migration entity.
 *
 * Extends the Migration entity so we can use it but not modify the Migration
 * pages.
 *
 * @see Drupal\migrate_plus\Entity\Migration
 *
 * @ConfigEntityType(
 *   id = "feed_migration",
 *   label = @Translation("Feed Migration"),
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "weight" = "weight"
 *   }
 * )
 */
class FeedMigration extends Migration {}
