<x-layout>

<form method="POST"    action="{{route('data.update',$data['id'])}}">
@csrf
@method('PATCH')
<x-format > تعديل  مجموعة بيانات </x-format >
      <div class="bg-white p-5 text-sm gap-4 shadow-md flex flex-col ">

        <div class="gap-1 flex flex-col">
        <label for="name_ar">العنوان بالعربية<span class="text-red-600"> &nbsp;  * </span></label> 
        <input class="border p-2 w-full rounded-md" name="name_ar" id="name_ar" value="{{$data['name_ar']}}"></input>
        </div>   

        <div class="gap-1 flex flex-col">
        <label for="name_en">العنوان بالانجليزية </label> 
        <input class="border p-2 w-full rounded-md" name="name_en" id="name_en" value="{{$data['name_en']}}"></input>
        </div>   

        <div class="gap-1 flex flex-col">
        <label for="describe_ar">الوصف بالعربية</label> 
        <textarea class="border p-2 w-full rounded-md" name="describe_ar" id="describe_ar" >{{$data['describe_ar']}}</textarea>
        </div>   
        
        <div class="gap-1 flex flex-col">
        <label for="describe_en">الوصف بالانجليزية</label> 
        <textarea class="border p-2 w-full rounded-md" name="describe_en" id="describe_en" > {{$data['describe_en']}}</textarea>
        </div>   

       
       <label for="update">التحديث الدوري<span class="text-red-600"> &nbsp;  * </span></label>
        <select id="update" name="update" class="border rounded-lg py-2" value="$data['update']">
        <option value="سنوي">سنوي</option>
                <option value="نصف سنوي">نصف سنوي</option>
                <option value="شهري">شهري</option>
                <option value="يومي">يومي</option>
        </select>
        
        <label for="status"> النشر في مكتبة البيانات المفتوحة<span class="text-red-600"> &nbsp;  * </span></label>
        <select id="status" name="status" class="border rounded-lg py-2" value="$data['status']" >
                <option value="منشور">منشور</option>
                <option value="غير منشور">غير منشور</option>
        </select>
        <x-border/>
        
            <div class=" gap-1 flex flex-col">
            <div class="">الوسوم المختارة:</div>
            <div class="grid grid-cols-3">
            @foreach($data->tags as $tag)
                <div>
                            <label >{{$tag['name_ar']}}</label>
                            
                </div>
               
                @endforeach
            </div>
</div> 
 <div class=" gap-1 flex flex-col">
            <div class="">الوسوم <span class="text-red-600"> &nbsp;  * </span></div>
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
        <x-button type="submit">تعديل</x-button>
        <x-aclos href="{{route('data.index')}}"  class="bg-slate-500 text-slate-900" >إلغاء</x-aclos>
</x-format>

   
</x-layout>