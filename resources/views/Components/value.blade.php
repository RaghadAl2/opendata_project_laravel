@props(["textarea"=>false])

<div class="gap-1 flex flex-col">
<label for={{$value}}>{{$slot}}</label> 
@if($textarea)

<textarea class="border p-2 w-full rounded-md" name={{$value}} id={{$value}} value="" required></textarea>   
@else
<input class="border p-2 w-full rounded-md" name={{$value}} id={{$value}} required></input>   
@endif

</div>