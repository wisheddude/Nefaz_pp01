<form action="{{$action}}" method="POST"
      class="min-h-96 w-xl px-8 py-8 shadow-stone-500 shadow rounded-lg flex flex-col gap-3.5">
    @csrf
    @if(isset($method) && $method !== 'POST')
        @method($method)
    @endif

    @yield('form-fields')
</form>
