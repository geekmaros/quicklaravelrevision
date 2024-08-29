@props(['name'])
@error($name)
<span class="text-red-500 text-xs font-bold">{{$message}}</span>
@enderror
