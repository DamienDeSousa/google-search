<?php

namespace Dades\GoogleSearchBundle\Services\Criteria;

class GoogleCriteriaService
{
    protected $criteria;
    protected $value;

    public function __construct()
    {
        
    }

    public function getCriteria()
    {
        //build query : $criteria=$value
        return $this->criteria;
    }

    public function setValue(string $value)
    {
        //repace [ ] by [+]
        $this->value = $value;
    }
}
//https://moz.com/blog/the-ultimate-guide-to-the-google-search-parameters