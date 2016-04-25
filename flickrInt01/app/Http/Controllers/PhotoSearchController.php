<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

use App\IPhotoSearch;
use App\FlickrPhotoSearch;

class PhotoSearchController extends Controller
{
	//
	private $photoSearch;	

	public function __construct()
	{
		$this->photoSearch = \App::make(IPhotoSearch::class);

	}

	public function search()
	{
		$args = Input::all();
		$tags = array_get($args,'tags',' ');//default to space
		$results=$this->photoSearch->byTags($tags);

		$photos = [];
		$page = 1;
		dd($results);
		if($results['stat'] == 'ok')
		{
			$photos = array_get($results,'photos.photo');
			$page = array_get($results,'photos.page');
		}
		else { }

		//dd($photos);
		$view = view('photopage')
			->with('tagsStr',trim($tags))
			->with('photos',$photos)
			->with('pageNumber',$page)
			;
		return $view;
	}
}
