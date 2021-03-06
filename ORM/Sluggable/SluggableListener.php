<?php

namespace Unifik\DoctrineBehaviorsBundle\ORM\Sluggable;

use Doctrine\Common\EventArgs;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;

/**
 * Class SluggableListener
 *
 * All sluggable listeners must extend this base Class
 */
class SluggableListener extends BaseSluggableListener implements EventSubscriber, SluggableListenerInterface
{
    /**
     * Get Subscribed Events
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return [
            Events::loadClassMetadata,
            Events::prePersist,
            Events::onFlush
        ];
    }
}
