
<x-format > تعديل  مجموعة بيانات </x-format >
      <div class="bg-white p-5 text-sm gap-4 shadow-md flex flex-col ">
      <x-value>العنوان بالعربية<span class="text-red-600"> &nbsp;  * </span></x-value>
       <x-value>العنوان بالانجليزية</x-value>
       <x-value :textarea="true">الوصف بالعربية</x-value>
       <x-value :textarea="true">الوصف بالانجليزية</x-value>
       <label for="update">التحديث الدوري</label>
        <select id="update" name="update" class="border rounded-lg py-2">
                <option value="yearly">سنوي</option>
                <option value="half year">نصف سنوي</option>
        </select>
        
        <label for="status"> النشر في مكتبة البيانات المفتوحة</label>
        <select id="status" name="status" class="border rounded-lg py-2">
                <option value="published">منشور</option>
                <option value="unpublished">غير منشور</option>
        </select>
        <x-border/>
        <div class=" gap-1 flex flex-col">
            <div class="">الفئات</div>
          
         <div >
                <input type="radio" id="reports" name="catgories" value="reports">
                <label for="reports">التقارير</label>
                <span class="px-40">
                   
                </span>
                
                <input type="radio" id="students" name="catgories" value="students">
                    <label for="students">الطلاب</label>
                    </div>
          
        </div>
        <x-border/>
            <div class=" gap-1 flex flex-col">
            <div class="">الوسوم</div>
            <div class="grid grid-cols-3">
                
                <div>
                    <input type="checkbox" id="red" value="red" class="accent-indigo-800">
                            <label for="">kljkllklkjljl</label>
                </div>
                 
            </div>
        </div>

        <x-border/>
        <div class=" gap-1 flex flex-col">
            <div class="">المصادر</div>
            <div class="flex flex-col border border-slate-200 rounded-md ">
                <div class="border border-slate-200 px-4 py-2">
                    lk
                    </div>
                    <div class="border border-slate-200  px-4 py-2">
                        lk
                    </div>     
                       
            </div>
        </div>
        

  
    








    </div>
<x-format class=" mb-20 ">
        <x-button>تعديل</x-button>
        <x-button class="bg-slate-500 text-slate-900" >إلغاء</x-button>
</x-format>
