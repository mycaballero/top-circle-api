<?php

namespace App\Http\Services\Users\Impl;

use Illuminate\Database\Eloquent\Collection;
use App\Http\Services\Users\UserPlayersService;
use App\Http\Repositories\Users\UserPlayersRepository;

class UserPlayersServiceImpl implements UserPlayersService
{
    /**
     * @var UserPlayersRepository
     */
    private $userPlayersRepository;

    public function __construct(UserPlayersRepository $userPlayersRepository)
    {
        $this->userPlayersRepository = $userPlayersRepository;
    }

    /**
     *  Get all Players
     * @return Collection
     */
    public function getAllByplayers(): Collection
    {
        return $this->userPlayersRepository->getAllPlayers();
    }
}
