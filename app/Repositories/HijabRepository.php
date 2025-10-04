<?php

namespace App\Repositories;

use App\Models\Hijab;
use App\Repositories\Contracts\HijabRepositoryInterface;

class HijabRepository implements HijabRepositoryInterface
{
    public function getPopularHijabs($limit = 4)
    {
        return Hijab::where('is_popular', true)->take($limit)->get();
    }

    public function getAllNewHijabs()
    {
        return Hijab::latest()->get();
    }

    public function find($id)
    {
        return Hijab::find($id);
    }

    public function getPrice($hijabId)
    {
        $hijab = $this->find($hijabId);
        return $hijab ? $hijab->price : 0;
    }
}
