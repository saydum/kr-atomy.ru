<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Leeto\Seo\Models\Seo;


trait AutoSaveSeoTags
{
    public function seoTagsSave(mixed $model)
    {
        if (seo()->meta()->title() == "Laravel") {
            seo()->title( $model->name, true);
            seo()->description($model->description, true);
            seo()->keywords($model->description, true);
        } else {
            seo()->meta()->title();
            seo()->meta()->description();
            seo()->meta()->keywords();
        }
    }
}
