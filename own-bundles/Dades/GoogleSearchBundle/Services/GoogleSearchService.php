<?php

namespace Dades\GoogleSearchBundle\Services;

use Dades\GoogleSearchBundle\Services\Criteria\GoogleCriteriaService;

class GoogleSearchService
{
    //protected $url;
    protected $googleCriteriaService;

    public function __construct(GoogleCriteriaService $googleCriteriaService)
    {
        $this->googleCriteriaService = $googleCriteriaService;

        //$this->url = "https://www.google.com/search?";
    }

    /*public function getUrl(): string 
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }*/

    public function search(array $params): void 
    {
        var_dump("something");
        die();
    }
}