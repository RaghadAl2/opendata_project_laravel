<x-layout>
<form method="POST" action="{{route('data.index')}}">
@csrf
<x-format > إضافة  مجموعة بيانات </x-format >
      <div class="bg-white p-5 text-sm gap-4 shadow-md flex flex-col ">
      <x-value>العنوان بالعربية<x-slot:value>name_ar</x-slot:value><span class="text-red-600"> &nbsp;  * </span></x-value>
       <x-value>العنوان بالانجليزية<x-slot:value>name_en</x-slot:value></x-value>
       <x-value :textarea="true">الوصف بالعربية<x-slot:value>describe_ar</x-slot:value></x-value>
       <x-value :textarea="true">الوصف بالانجليزية<x-slot:value>describe_en</x-slot:value></x-value>
       <label for="update"> التحديث الدوري<span class="text-red-600"> &nbsp;  * </span></label>
        <select id="update" name="update" class="border rounded-lg py-2">
                <option value="سنوي">سنوي</option>
                <option value="نصف سنوي">نصف سنوي</option>
                <option value="شهري">شهري</option>
                <option value="يومي">يومي</option>
        </select>
        
        <label for="status">النشر في مكتبة البيانات المفتوحة<span class="text-red-600"> &nbsp;  * </span></label>
        <select id="status" name="status" class="border rounded-lg py-2">
                <option value="منشور">منشور</option>
                <option value="غير منشور">غير منشور</option>
        </select>
        <x-border/>
        
            <div class=" gap-1 flex flex-col">
            <div class="">الوسوم<span class="text-red-600"> &nbsp;  * </span></div>
            <div class="grid grid-cols-3">
              
                @foreach($tags as $tag)
                <div>
                   
                    <input type="checkbox" name="tags[]" id="tag_{{ $tag['id'] }}" value="{{$tag['id']}}" class="accent-indigo-800">
                            <label for="tag_{{ $tag['id'] }}">{{$tag->name_ar}}</label>
                </div>
                @endforeach
                
                 
            </div>
        </div>

       
      

    </div>
<x-format class=" mb-20 ">
        <x-button   type="submit">إضافة</x-button >
        <x-aclos href="{{route('data.index')}}" class="bg-slate-400 hover:bg-slate-600  text-slate-900" >إلغاء</x-aclos>
</x-format>
</form>
 
</x-layout>