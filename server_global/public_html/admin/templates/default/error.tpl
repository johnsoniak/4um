{if $engine->error.is}
<div class="alert alert-{$engine->error.type} alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert"><span>×</span></button>
        {$engine->error.value}
    </div>
</div>
{/if}