<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Model\TreeTypes; 

class TreesExplore extends Model
{
	public function tree_types()
	{
		return $this->belongsTo(TreeTypes::class, "tree_type_id"); 
	}
}