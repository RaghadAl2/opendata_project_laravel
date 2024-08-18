<x-layout>
<form method="POST" action="/tags/{{$tag['id']}}">
@csrf
@method('PATCH')
<x-format > تعديل وسم    </x-format >
<div class="bg-white p-5 text-sm gap-4 shadow-md flex flex-col ">
<div class="gap-1 flex flex-col">
<label for="name_ar">العنوان بالعربية<span class="text-red-600"> &nbsp;  * </span></label> 
<input class="border p-2 w-full rounded-md"  name="name_ar" id="name_ar" value="{{$tag['name_ar']}}"></input>   

</div>

<div class="gap-1 flex flex-col">
<label for="name_en" >العنوان بالانجليزية<span class="text-red-600"> &nbsp;  * </span></label> 
<input class="border p-2 w-full rounded-md" name="name_en" id="name_en"  value="{{$tag['name_en']}}"></input>   



</div>
</div> 
<x-format class="mb-96" > 
<x-button type="submit">تعديل</x-button>
<x-aclos href="/tags" class="bg-slate-400 hover:bg-slate-500 text-slate-900" >إلغاء</x-aclos>    
</x-format >


</form>
</x-layout>