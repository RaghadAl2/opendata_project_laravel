<div class="bg-white  text-sm gap-2 flex flex-col ">
        <div class="border-b p-4 grid grid-cols-7 justify-between  text-xs">
            {{$slot}}
            
            <div class="flex flex-row px-4">
               <a href="/data/$data['id']/show"  class="inline-block text-indigo-700 px-1">عرض</a>
                <a href="/data/$data['id']/edit" class="inline-block text-indigo-700 px-1">تعديل</a>
                <a  href="/data/$data['id']/delete" class="inline-block text-red-700 px-1">حذف</a>  
            </div>
 </div>