<?php

namespace App\Repository;

interface CountriesRepositoryInterface
{
    public function saveData($request);

    public function updateStatus($countries, $status);

    public function update($request, $countries);

    public function get(); 

}