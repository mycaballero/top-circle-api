<?php

namespace App\Http\Repositories\Users\Impl;

use App\Models\User;
use Illuminate\Support\Collection;
use App\Http\Repositories\Users\UserPlayersRepository;

class UserPlayersRepositoryImpl implements UserPlayersRepository
{
    /**
     * @return Collection
     */
    public function getAllPlayers(): Collection
    {
        return User::all();
    }
}
