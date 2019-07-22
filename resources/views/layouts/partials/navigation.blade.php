<div id="navigation">
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				@foreach ($categories as $key => $category)
				<li><a href="{{ route('showListProductByCategory', $category->id) }}" class="{{ $key == 0  ? 'active' : ' ' }}" >{{ $category->name }}</a></li>
				@endforeach
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
</div>