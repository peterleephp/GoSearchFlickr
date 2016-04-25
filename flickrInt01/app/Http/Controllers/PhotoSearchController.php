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
		$page = array_get($args,'page','1');//default to 1
	
		$photos = [];
		$nextPage = 1;
		$numberOfPages = 0;

		$results=$this->photoSearch->byTagsAtPage($tags,$page);

		if(isset($results) && $results['stat'] == 'ok')
		{
			//dd($results);
			$photos = array_get($results,'photos.photo');
			$numberOfPages = array_get($results,'photos.pages');
			if($page > $numberOfPages )
			{
				return redirect('search/flickr?'.http_build_query(array('tags'=>$tags)));
			}
			$nextPage = $page + 1;
		}
		else { }


		//dd($photos);
		$view = view('photopage')
			->with('tagsStr',trim($tags))
			->with('photos',$photos)
			->with('nextPage',$nextPage)
			;
		return $view;
	}
}
