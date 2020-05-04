<?php

namespace Pflaesterer\SearchOxid\Application\Model;

class Search extends Search_parent  {

    protected function _getSearchSelect($sSearchParamForQuery = false, $sInitialSearchCat = false, $sInitialSearchVendor = false, $sInitialSearchManufacturer = false, $sSortBy = false) {
        $r = parent::_getSearchSelect($sSearchParamForQuery, $sInitialSearchCat, $sInitialSearchVendor, $sInitialSearchManufacturer, $sSortBy);

        $oArticle = oxNew(\OxidEsales\Eshop\Application\Model\Article::class);
        $sArticleTable = $oArticle->getViewName();
        $search = " and {$sArticleTable}.oxparentid = '' ";
        $replace = " and 1 ";
        return str_replace($search, $replace, $r);
    }
    
}
