<?php

namespace App\Http\Controllers;

use App\Traits\AutoSaveSeoTags;

abstract class Controller
{
    use AutoSaveSeoTags;
}
