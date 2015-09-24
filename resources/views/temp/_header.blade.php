<div id="header">
	<div id="header_top"></div>
	<div id="header_middle">
		<span class="span_left big"><a href="/">_chat</a></span>
		<span class="span_left big" style="float: right;">
			@if (Auth::user())
				{{ Auth::user()->name }}
			@else
				guest
			@endif
		</span>
	</div>
	<div id="header_bottom"></div>
</div>
