<!-- array input -->

<?php
$max = isset($field['max']) && (int) $field['max'] > 0 ? $field['max'] : -1;
$min = isset($field['min']) && (int) $field['min'] > 0 ? $field['min'] : -1;
$item_name = strtolower(isset($field['entity_singular']) && !empty($field['entity_singular']) ? $field['entity_singular'] : $field['label']);

$items = old($field['name']) ? (old($field['name'])) : (isset($field['value']) ? ($field['value']) : (isset($field['default']) ? ($field['default']) : '' ));

// make sure not matter the attribute casting
// the $items variable contains a properly defined JSON
if (is_array($items)) {
    if (count($items)) {
        $items = json_encode($items);
    } else {
        $items = '[]';
    }
} elseif (is_string($items) && !is_array(json_decode($items))) {
    $items = '[]';
}

?>
<div ng-app="backPackTableApp" ng-controller="tableController" @include('crud::inc.field_wrapper_attributes') >

	<label>{!! $field['label'] !!}</label>
	@include('crud::inc.field_translatable_icon')

	<input class="array-json" type="hidden" id="{{ $field['name'] }}" name="{{ $field['name'] }}">

	<div class="array-container form-group">

		<div class="table table-bordered table-striped m-b-0" ng-init="field = '#{{ $field['name'] }}'; items = {{ $items }}; max = {{$max}}; min = {{$min}}; maxErrorTitle = '{{trans('backpack::crud.table_cant_add', ['entity' => $item_name])}}'; maxErrorMessage = '{{trans('backpack::crud.table_max_reached', ['max' => $max])}}'">

			<div>
			<div>
				<span class="text-center" ng-if="max == -1 || max > 1"> {{-- <i class="fa fa-sort"></i> --}} </span>
				<span class="text-center" ng-if="max == -1 || max > 1"> {{-- <i class="fa fa-trash"></i> --}} </span>
			</div>
			</div>

			<div ui-sortable="sortableOptions" ng-model="items" class="table-striped">

			<div ng-repeat="item in items" class="array-row" style="display: flex; align-items: center; margin-top: 10px; margin-bottom: 30px">

					<div style="width: 90%;">

						<label for="question">La question</label>
						<input class="form-control input-sm " type="text" id="question" ng-model="item.question">

						<label for="question">La réponse</label>
						<textarea class="form-control input-sm " ng-model="item.response" style="min-height: 150px;"></textarea>

					</div>
				<div style="width: 10%">
					<div ng-if="max == -1 || max > 1" style="margin-left: 35%; margin-bottom: 5px;">
						<span class="btn btn-sm btn-default sort-handle" style="width: 32px; height: 32px;"><span class="sr-only">sort item</span><i class="fa fa-sort" role="presentation" aria-hidden="true"></i></span>
					</div>
					<div ng-if="max == -1 || max > 1" style="margin-left: 35%; margin-top: 10px;">
						<button ng-hide="min > -1 && $index < min" class="btn btn-sm btn-default" type="button" ng-click="removeItem(item);" style="width: 32px; height: 32px;" ><span class="sr-only">delete item</span><i class="fa fa-trash" role="presentation" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>

			</div>

		</div>

		<div class="array-controls btn-group m-t-10">
			<button ng-if="max == -1 || items.length < max" class="btn btn-sm btn-default" type="button" ng-click="addItem()"><i class="fa fa-plus"></i> {{trans('backpack::crud.add')}} {{ $item_name }}</button>
		</div>

	</div>

	{{-- HINT --}}
	@if (isset($field['hint']))
		<p class="help-block">{!! $field['hint'] !!}</p>
	@endif
</div>

{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->checkIfFieldIsFirstOfItsType($field, $fields))

	{{-- FIELD CSS - will be loaded in the after_styles section --}}
	@push('crud_fields_styles')
	{{-- @push('crud_fields_styles')
			{{-- YOUR CSS HERE --}}
	@endpush

	{{-- FIELD JS - will be loaded in the after_scripts section --}}
	@push('crud_fields_scripts')
	{{-- YOUR JS HERE --}}
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-sortable/0.14.3/sortable.min.js"></script>
	<script>

      window.angularApp = window.angularApp || angular.module('backPackTableApp', ['ui.sortable'], function($interpolateProvider){
              $interpolateProvider.startSymbol('<%');
              $interpolateProvider.endSymbol('%>');
          });

      window.angularApp.controller('tableController', function($scope){

          $scope.sortableOptions = {
              handle: '.sort-handle'
          };

          $scope.addItem = function(){

              if( $scope.max > -1 ){
                  if( $scope.items.length < $scope.max ){
                      var item = {};
                      $scope.items.push(item);
                  } else {
                      new PNotify({
                          title: $scope.maxErrorTitle,
                          text: $scope.maxErrorMessage,
                          type: 'error'
                      });
                  }
              }
              else {
                  var item = {};
                  $scope.items.push(item);
              }
          }

          $scope.removeItem = function(item){
              var index = $scope.items.indexOf(item);
              $scope.items.splice(index, 1);
          }

          $scope.$watch('items', function(a, b){

              if( $scope.min > -1 ){
                  while($scope.items.length < $scope.min){
                      $scope.addItem();
                  }
              }

              if( typeof $scope.items != 'undefined' && $scope.items.length ){

                  if( typeof $scope.field != 'undefined'){
                      if( typeof $scope.field == 'string' ){
                          $scope.field = $($scope.field);
                      }
                      $scope.field.val( angular.toJson($scope.items) );
                  }
              }
          }, true);

          if( $scope.min > -1 ){
              for(var i = 0; i < $scope.min; i++){
                  $scope.addItem();
              }
          }
      });

      angular.element(document).ready(function(){
          angular.forEach(angular.element('[ng-app]'), function(ctrl){
              var ctrlDom = angular.element(ctrl);
              if( !ctrlDom.hasClass('ng-scope') ){
                  angular.bootstrap(ctrl, [ctrlDom.attr('ng-app')]);
              }
          });
      })

	</script>

	@endpush
@endif
{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
