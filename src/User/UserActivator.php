<?php namespace Anomaly\UsersModule\User;

use Anomaly\UsersModule\User\Command\ForceActivation;
use Anomaly\UsersModule\User\Contract\User;
use Illuminate\Foundation\Bus\DispatchesCommands;

/**
 * Class UserActivator
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\User
 */
class UserActivator
{

    use DispatchesCommands;

    /**
     * Activate a user without a code.
     *
     * @param User $user
     * @return User
     */
    public function force(User $user)
    {
        return $this->dispatch(new ForceActivation($user));
    }
}