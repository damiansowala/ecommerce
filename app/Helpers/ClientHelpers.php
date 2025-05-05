<?php

namespace App\Helpers;

class ClientHelpers
{
    public static function countUnverifiedClients(): string
    {
        $unverifiedCount = \App\Models\Clients\Client::where('verified', 0)->where('clients.client_kind', '!=', 'individual')->count();
        return \App\Helpers\BadgeHelper::badge($unverifiedCount);
    }
}
