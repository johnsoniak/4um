{if $engine->error.is}
<div class="messageis">
	<div class="alert alert-{$engine->error.type}" role="alert">
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			{$engine->error.value}
	</div>
</div>
{/if}