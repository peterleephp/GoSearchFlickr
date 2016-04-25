<?php

namespace App;

use Illuminate\Support\Collection;

interface IPhotoSearch
{
	public function byTags($tags);
}

