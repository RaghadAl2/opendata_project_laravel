<x-layout>
<div class="grid place-items-end ">
  <x-aclos href="tags/create">اضافة وسم</x-aclos>
</div>
<div class="bg-slate-50 rounded-md shadow-md">
                    <div class="border-b p-4  grid grid-cols-3 justify-between text-xs">
                        <div>الاسم باللغة العربية
                        </div>
                        <div>الاسم باللغة الانجليزية
                        </div>
                        <div>   
                        </div>
                    </div>
</div>
             
<div class="bg-white  text-sm gap-2 flex flex-col ">

@foreach($tags as $tag)
<form method="POST" action="/tags/{{$tag['id']}}">
    @csrf
    @method('DELETE')
        <div class="border-b p-4 grid grid-cols-3 justify-between  text-xs">
            <div>{{$tag['name_ar']}}
            </div>
            <div>{{$tag['name_en']}}
            </div>
            <div class="flex flex-row">
                <a href="/tags/{{$tag['id']}}/edit" class="text-indigo-700 px-1">تعديل</a>
                <button class="text-red-700 px-1">حذف</button>
            </div>
 </div>
</form>
 @endforeach
</div>
<div class="mb-96 py-28">
</div>

       
</x-layout>