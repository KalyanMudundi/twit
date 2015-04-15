@section('content')
<div class="row">
	<div class="large-12 columns">
		<h1>Custom Twitter Analysis</h1>
	</div>
</div>

<div id="clear" style="height: 25px"></div>

<div class="row" data-equalizer>
	<div class="large-4 columns" data-equalizer-watch>
		<div class="panel" data-equalizer-watch>
			<h1 style="text-align: center; font-size: 92px"><i class="fi-results-demographics"></i></h1>
			<h3>Create User Groups</h3>
			<p>Create Custom User Groups</p>
		</div>
	</div>

	<div class="large-4 columns" data-equalizer-watch>
		<div class="panel" data-equalizer-watch>
			<h1 style="text-align: center; font-size: 92px"><i class="fi-torsos-all-female"></i></h1>
			<h3>Analyze Tweets By Group</h3>
			<p>Create Custom User Groups</p>
		</div>
	</div>

	<div class="large-4 columns" data-equalizer-watch>
		<div class="panel" data-equalizer-watch>
			<h1 style="text-align: center; font-size: 92px"><i class="fi-graph-pie"></i></h1>
			<h3>Generate Reports</h3>
			<p>Visualize your data</p>
		</div>
	</div>
</div>

@if(!Confide::user())
<div id="clear" style="height: 25px"></div>
<div class="row" >
	<div class="large-12 columns" >
		<div class="right">
			<a href="{{URL('users/create')}}" class="button">Sign Up Now</a>
			<a href="{{URL('users/login')}}" class="button">Log In</a>
		</div>
	</div>
</div>
@endif

@stop
