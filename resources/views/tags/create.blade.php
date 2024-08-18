<x-layout>

<x-format > إضافة وسم   </x-format>
<form method="POST" action="/tags">
@csrf

<div class="bg-white p-5 text-sm gap-4 shadow-md flex flex-col ">
<x-value>العنوان بالعربية<x-slot:value>name_ar</x-slot:value><span class="text-red-600"> &nbsp;  * </span></x-value>
<x-value>العنوان بالانجليزية<x-slot:value>name_en</x-slot:value><span class="text-red-600"> &nbsp;  * </span></x-value>
</div>


<x-format class="mb-96" > 
<x-button type="submit">حفظ</x-button>
<x-aclos href="/tags" class="bg-slate-400 hover:bg-slate-500 text-slate-900" >إلغاء</x-aclos>    
</x-format >
</form>

</x-layout>