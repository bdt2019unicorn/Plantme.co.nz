<?php

namespace App\Http\Controllers\Web2App;

use App\Http\Controllers\Controller;
use App\Http\Model\TreesExplore;
use App\Http\Model\TreeTypes;

class ExploreController extends Controller
{
	public function index()
	{
		return view('Web2App/Explore/index'); 
	}

	public function all_trees()
	{
		$trees = TreesExplore::all();
		foreach ($trees as $tree) 
		{
			$tree->tree_types; 
		}
		echo json_encode($trees);
	}
}