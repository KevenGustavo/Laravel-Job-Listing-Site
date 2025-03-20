<form {{ $attributes(["class"=>"max-w-2xl mx-auto space-y-6","method"=>"get"]) }}>
    @if ($attributes->get("method","get") != "get")
        @csrf
        @method($attributes->get("method"))
    @endif
    
    {{ $slot }}
</form>
