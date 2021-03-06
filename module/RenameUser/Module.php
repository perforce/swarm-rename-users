<?php
/**
 * Perforce Swarm, Community Development
 *
 * @copyright   2015 Perforce Software. All rights reserved.
 * @license     Please see LICENSE.txt in top-level folder of this distribution.
 * @version     <release>/<patch>
 */

namespace RenameUser;

use Zend\EventManager\Event;

class Module
{
    /**
     * Bootstrap for handler for renaming users.
     *
     * @param Event $event
     */
    public function onBootstrap(Event $event)
    {
        $application = $event->getApplication();
        $services    = $application->getServiceManager();
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
