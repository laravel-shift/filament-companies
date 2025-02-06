<?php

namespace Wallo\FilamentCompanies\Concerns\Base;

trait HasAutoAcceptInvitations
{
    /**
     * Indicates if Company Invitations will be accepted automatically after a invited user registers a new account.
     */
    public static ?bool $autoAcceptInvitations = false;

    /**
     * Configure Company Invitations to be accepted automatically after routes.
     */
    public function autoAcceptInvitations(): static
    {
        static::$autoAcceptInvitations = true;

        return $this;
    }

    /**
     * Get the configuration.
     */
    public static function autoAcceptsInvitations(): string
    {
        return static::$autoAcceptInvitations;
    }
}
