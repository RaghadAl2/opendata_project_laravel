<x-layout>
<div class="grid place-items-end ">
  <x-aclos href="/data/create">اضافة مجموعة بيانات</x-aclos>
</div>
<div class="bg-slate-50 rounded-md shadow-md">
                    <div class="border-b p-4  grid grid-cols-7 justify-between text-xs">
                        <div class="col-span-2">الاسم باللغة العربية
                        </div>
                        <div class="col-span-2">الاسم باللغة الانجليزية
                        </div>
                        <div>التحديث الدوري
                        </div>
                        <div>الحالة
                        </div>
                        <div>   
                        </div>
                    </div>
</div>
@foreach($datasets as $data)
               
<div class="bg-white  text-sm gap-2 flex flex-col ">
        <div class="border-b p-4 grid grid-cols-7 justify-between  text-xs">
    <div class="col-span-2">{{$data->name_ar}}</div>
            <div class="col-span-2">{{$data->name_en}}</div>
            <div >{{$data->update}}
            </div>
            <div >
                <span class="p-1 bg-green-200 rounded-md">
                    {{$data->status}}
                </span>

            </div>
   
            <div class="flex flex-row px-4">
               <a href="{{route('data.show',$data->id)}}"  class="inline-block text-indigo-700 px-1">عرض</a>
                <a href="{{route('data.edit',$data->id)}}" class="inline-block text-indigo-700 px-1">تعديل</a>
                <form method="POST" action="{{route('data.destroy',$data->id)}}" >
                @csrf
                @method('DELETE')
                <button   class="inline-block text-red-700 px-1">حذف</button>  
                </form>
            </div>
 
</div>
</div>
@endforeach

<div class="mb-96 py-28">
</div>
       
</x-layout>