<?php

namespace App\Http\Services\Users;

use Illuminate\Support\Collection;

interface UserPlayersService
{
    /**
     * @return Collection
     */
    public function getAllByplayers(): Collection;

}
