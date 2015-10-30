<?php namespace Anomaly\UsersModule\User\Security;

use Anomaly\Streams\Platform\Addon\Extension\Extension;
use Anomaly\UsersModule\User\Contract\UserInterface;
use Anomaly\UsersModule\User\Security\Contract\SecurityCheckInterface;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SecurityCheckExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\User\Security
 */
class SecurityCheckExtension extends Extension implements SecurityCheckInterface
{

    /**
     * Check a login attempt.
     *
     * @return bool|Response
     */
    public function attempt()
    {
        return true;
    }

    /**
     * Check an HTTP request.
     *
     * @param UserInterface|null $user
     * @return bool|Response
     */
    public function check(UserInterface $user = null)
    {
        return true;
    }

}
