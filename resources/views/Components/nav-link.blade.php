@props(["active"=>false])


<a
class="{{$active?'block rounded-md py-2 bg-indigo-50 text-indigo-800 ':'block rounded-md py-2 hover:bg-indigo-50 hover:text-indigo-800 focus:bg-indigo-50 focus:text-indigo-800'}}"
aria-current="{{$active? 'page' :false }}"
{{$attributes}}
>
{{$slot}}
</a>