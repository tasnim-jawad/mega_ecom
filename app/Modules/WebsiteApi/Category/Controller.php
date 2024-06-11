<?php

namespace App\Modules\WebsiteApi\Category;

use App\Http\Controllers\Controller as ControllersController;


use App\Modules\WebsiteApi\Category\Actions\GetAllCategoryGroup;
use App\Modules\WebsiteApi\Category\Actions\GetAllCategoryByCategoryGroupId;

use App\Modules\WebsiteApi\Category\Actions\GetAllCategory;
use App\Modules\WebsiteApi\Category\Actions\GetAllNavCategory;
use App\Modules\WebsiteApi\Category\Actions\GetAllFeaturedCategory;
use App\Modules\WebsiteApi\Category\Actions\GetAllSubCategoryByCategoryId;

class Controller extends ControllersController
{

    public function GetAllCategorygroups()
    {
        $data = GetAllCategoryGroup::execute();
        return $data;
    }
    public function GetCategoryByCategoryGroupId($slug)
    {
        $data = GetAllCategoryByCategoryGroupId::execute($slug);
        return $data;
    }
    public function GetAllCategory()
    {
        $data = GetAllCategory::execute();
        return $data;
    }
    public function GetAllFeaturedCategory()
    {
        $data = GetAllFeaturedCategory::execute();
        return $data;
    }
    public function GetAllNavCategory()
    {
        $data = GetAllNavCategory::execute();
        return $data;
    }
    public function GetAllSubCategoryByCategoryId($slug)
    {
        $data = GetAllSubCategoryByCategoryId::execute($slug);
        return $data;
    }
}
