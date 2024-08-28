<x-layout>

<x-format > عرض  مجموعة بيانات </x-format >
      <div class="bg-white p-5 text-sm gap-4 shadow-md flex flex-col ">

        <div class="gap-1 flex flex-col">
        <label for="name_ar">العنوان بالعربية</label> 
        <div class=" p-2 w-full rounded-md">{{$data->name_ar}}</div>
        </div>   

        <div class="gap-1 flex flex-col">
        <label for="name_en">العنوان بالانجليزية </label> 
        <div class=" p-2 w-full rounded-md">{{$data->name_en}}</div>

        </div>   

        <div class="gap-1 flex flex-col">
        <label for="describe_ar">الوصف بالعربية</label> 
        <div class=" p-2 w-full rounded-md">{{$data->describe_ar}}</div>

        </div>   
        
        <div class="gap-1 flex flex-col">
        <label for="describe_en">الوصف بالانجليزية</label> 
        <div class=" p-2 w-full rounded-md">{{$data->describe_en}}</div>

        </div>   

        <div class="gap-1 flex flex-col">
       <label for="update">التحديث الدوري</label>
        <div class=" p-2 w-full rounded-md">{{$data->update}}</div>

        </div>  

        <div class="gap-1 flex flex-col">
        <label for="status"> النشر في مكتبة البيانات المفتوحة</label>
        <div class=" p-2 w-full rounded-md">{{$data->status}}</div>

        </div>  


            <div class=" gap-1 flex flex-col">
            <div class="">الوسوم</div>
            <div class="grid grid-cols-3">
            @foreach($data->tags as $tag)
                <div>
                    <label for="tag['id']">{{$tag->name_ar}}</label>
                </div>
                @endforeach
                 
            
               
            </div>
        </div>


    </div>
<x-format class=" mb-20 ">
<form method="POST" action="{{route('data.destroy',$data->id)}}" id="delete-form"  >
    @csrf
    @method('DELETE')
    <x-button class="bg-red-600 hover:bg-red-800 text-slate-900" >حذف</x-button>

        <x-aclos href="/data"  class="bg-slate-400 hover:bg-slate-600 text-slate-900" >إلغاء</x-aclos>

        </form>
</x-format>


</x-layout>