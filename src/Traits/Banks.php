<?php

namespace Bdwey\Banks\Traits;
use Bdwey\Banks\Model\Banks as Model;

trait Banks
{
    public function banks()
    {
        return $this->hasMany(Model::class, 'user_id', 'id');
    }

    public function hasBanks()
    {
        return $this->banks()->count();
    }

    public function main()
    {
        return $this->banks()->Active()->Main()->first();
    }

    public function otherBanks()
    {
        return $this->banks()->Active()->where('is_main', 0)->get();
    }

}