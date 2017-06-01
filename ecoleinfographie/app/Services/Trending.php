<?php

namespace App\Services;

use Analytics;
use Spatie\Analytics\Period;

class Trending
{
    public function week()
    {
        return $this->getResults($days = 15, $limit = 5);
    }
    
    protected function getResults($days, $limit = 5)
    {
        $data = Analytics::fetchMostVisitedPages(Period::days($days), $limit + 10);
        return $this->parseResults($data, $limit);
    }
    
    protected function parseResults($data, $limit)
    {
        return $data->reject(function ($item){
            return !starts_with($item['url'], '/blog') or
                $item['url'] == '/blog' or
                str_contains($item['url'], ['?page', '?category', '&category', '?tag', '&tag']);
        })->unique('url')->transform(function ($item){
            $item['pageTitle'] = str_replace(' | École d’infographie de la Province de Liège', '', $item['pageTitle']);
            return $item;
        })->splice(0, $limit);
    }
}
