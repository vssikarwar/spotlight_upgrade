<?php

namespace App\Repository;

interface StatesRepositoryInterface
{
    public function saveData($request);

    public function updateStatus($states, $status);

    public function update($request, $states);

    public function get(); 


}