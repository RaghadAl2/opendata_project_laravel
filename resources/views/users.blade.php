<x-layout>

<div class="bg-slate-50 rounded-md shadow-md">
                    <div class="border-b p-4  grid grid-cols-6 justify-between text-xs">
                        <div class="col-span-2">اسم المستخدم
                        </div>
                        <div class="col-span-2 ">الايميل
                        </div>
                        
                    </div>
</div>
@foreach($users as $user)
               
<div class="bg-white  text-sm gap-2 flex flex-col ">
        <div class="border-b p-4 grid grid-cols-6 justify-between  text-xs">
    <div class="col-span-2">{{$user['name']}}</div>
            <div class="col-span-2">{{$user['email']}}</div>
            <div >
            </div>
            

            </div>
   
            
 
</div>

@endforeach

<div class="mb-96 py-28">
</div>
</x-layout>