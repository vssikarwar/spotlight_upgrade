<?php
namespace App\Repository;

interface CountriesRepositoryInterface
{
    public function saveData($request, $alias);

    public function updateStatus($affinityCategories, $status);

    public function update($request, $affinityCategories, $alias);

    public function get();


}