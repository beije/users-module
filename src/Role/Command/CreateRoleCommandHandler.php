<?php namespace Anomaly\UsersModule\Role\Command;

use Anomaly\UsersModule\Role\Contract\RoleRepositoryInterface;

class CreateRoleCommandHandler
{

    protected $roles;

    function __construct(RoleRepositoryInterface $roles)
    {
        $this->roles = $roles;
    }

    public function handle(CreateRoleCommand $command)
    {
        return $this->roles->create($command->getName(), $command->getSlug(), $command->getPermissions());
    }
}
 