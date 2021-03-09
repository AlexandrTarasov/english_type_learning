<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
	public function execute($alias){
		if(!$alias){
			abort(404);
		}
		// echo $alias;
		if(view()->exists('frontside.header')){
			$pages = Page::get(array('name','content'));

			$content_blocks = [];
			foreach($pages as $page){
				// $page->text = str_limit($page->text , 250);
				$item = array('title'=>$page->name, 'block'=>$page->content);
				array_push($content_blocks, $item);
			}

			return view('frontside.header',array('pages'=>$pages));
		}
	}
}
