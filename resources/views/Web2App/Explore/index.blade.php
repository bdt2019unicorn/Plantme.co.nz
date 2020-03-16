@extends('layouts.app')

@section('page_head')
<link rel="stylesheet" href="https://js.arcgis.com/4.14/esri/themes/light/main.css">
<link rel="stylesheet" href="css/Web2App/Explore/explore.css">
<link rel="stylesheet" href="css/Web2App/Explore/popup.css">
<link rel="stylesheet" href="css/Web2App/Explore/seed_collection_controller.css">
@endsection

@section('content')
<div id="viewDiv" class="container-fluid"></div>
@endsection

@section('page_popup')
<div id="seed_collection" v-show="show" :class="'card '+class_lists[current_component]">
	<div v-show="current_component!='TakePictureComponent'" class="card-header bg-light">
		<h6 class="card-title">@{{db_key_title[db_top_key]}}</h6>
	</div>
    
    <keep-alive>
        <component :is="current_component" v-bind="$data"></component>
    </keep-alive>

</div>

<div v-show="show" id="seed_collection_controller" class="bg-transparent common-popup">

    <button-controller 
        v-for="item of controller"
        :controller_name="item" 
        subset=""
        db_top_key=""
        current_component="LearnComponent" 
        onclick="ShowHideSubIcon()"
    >
    </button-controller>

    <div id="seed_collection_sub_icon" style="display: none;" class="bg-transparent common-popup seed_collection_sub_icon">
        <button-controller 
            v-for="item of Object.keys(seed_collection_icon)"
            :controller_name="item" 
            subset="seed_collection_icon"
            :db_top_key="seed_collection_icon[item]['db_top_key']"
            :current_component="seed_collection_icon[item]['current_component']" 
            onclick="ChangeComponent(this)"
        >
        </button-controller>
    </div>
    
</div>
@endsection

@section('page_script')
<script src="https://js.arcgis.com/4.14/"></script>
<script async type="module" src="js/Web2App/Explore/map_display_and_innitialize_module.js"></script>
<script src="js/Web2App/Explore/Function/put_trees_in_map.js"></script>
<script src="js/Web2App/Explore/Function/direction.js"></script>
<script src="js/Web2App/Explore/Function/distance_between_2_points.js"></script>
<script defer src="js/Web2App/Explore/map_user_actions_functions.js"></script>
<script async type="module" src="js/Web2App/Explore/Function/seed_collection.js"></script>
<script async type="module" src="js/Web2App/Explore/Function/seed_collection_controller.js"></script>
@endsection

