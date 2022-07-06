<?php
namespace App\Repository;

interface CitiesRepositoryInterface{
    public function list();

    public function countrieslist();

    public function statesList();

    public function stateName($stateId);

    public function updateCity($updatedData,$cities);
}