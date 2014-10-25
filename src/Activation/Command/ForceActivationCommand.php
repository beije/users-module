<?php namespace Anomaly\Streams\Addon\Module\Users\Activation\Command;

class ForceActivationCommand
{
    protected $userId;

    function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
 