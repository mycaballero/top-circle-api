<?php

namespace App\Http\Repositories\Users;

use Illuminate\Support\Collection;

interface UserPlayersRepository
{
    /**
     * @return Collection
     */
    public function getAllPlayers(): Collection;
}
