<?php

namespace App\Repositories\Contracts;

interface HijabRepositoryInterface
{
    public function getPopularHijabs($limit);

    public function getAllNewHijabs();

    public function find($id);

    public function getPrice($ticketId);
}