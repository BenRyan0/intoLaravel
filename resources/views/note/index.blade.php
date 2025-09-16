<x-app-layout>
    <div class="w-full h-full text-slate-700 relative flex justify-center items-center flex-col min-h-screen ">
     <div class="flex justify-between w-11/12 lg:w-[700px] p-5">
          <h2 class="font-bold text-white text-2xl">My Notes</h2>
             <button
                class="bg-blue-400 p-2 rounded-sm text-white text-center justify-center flex items-center font-bold px-4 hover:bg-white hover:text-blue-400 transition-all duration-300 border-2 border-transparent hover:border-blue-400 h-[40px]">
                <a href={{ route('note.create') }}>Add
                    new note</a></button>
        </div>
        <div class="w-11/12 lg:w-[700px] h-[500px] p-5 shadow overflow-y-auto overflow-x-hidden flex flex-col gap-6">
       
            @foreach ($notes as $note)
                <div class="bg-zinc-50 p-4 rounded-lg ">
                    <div>
                        <div class="flex justify-between flex-row gap-2 ">
                            <div
                                class="w-7/12 h-[100px] bg-gray-600 rounded-lg text-center flex justify-center items-center text-white/75">
                                img</div>
                            <div class="flex w-full justify-between relative">
                                <h2 class="font-bold text-lg pb-7 text-wrap text-start">{{ Str::words($note->title) }}
                                    <p class="text-sm absolute bottom-0 text-end w-full">
                                        {{ $note->created_at->format('l, F j, Y') }}
                                    </p>

                                </h2>
                            </div>
                        </div>

                        <p class="px-2 pt-4"> {{ $note->note }}</p>
                    </div>
                    <div class="pt-3 md:flex md:justify-end gap-2 grid ">
                        <div class="flex gap-2">
      <button
                     class=" bg-blue-500 text-white font-bold px-4 h-fit py-1 w-1/2 rounded-md shadow hover:bg-white hover:text-blue-500 hover:border-blue-500 flex justify-center items-center border-2 border-transparent transition-all duration-300 gap-1 group">
                     <svg xmlns="http://www.w3.org/2000/svg" class="" width="34" height="17" viewBox="0 0 24 24"><path class="stroke-white group-hover:stroke-blue-500"  fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M3 8V3h5m8 0h5v5m0 8v5h-5m-8 0H3v-5"/></svg>
                    <a href={{ route('note.show', $note) }}>Expand</a>
                </button>
    
                      <button
                     class=" bg-blue-500 text-white font-bold px-4 h-fit py-1 w-1/2 rounded-md shadow hover:bg-white hover:text-blue-500 hover:border-blue-500 flex justify-center items-center border-2 border-transparent transition-all duration-300 gap-1 group">
                     <svg xmlns="http://www.w3.org/2000/svg"  width="18" height="20" viewBox="0 0 24 24" fill="#ffffff"><g class="fill-white group-hover:fill-blue-500" fill="#ffffff"><path d="M15.9 2L3 14.9v5.7h5.7L21.5 7.7zM7.8 18.5H5v-2.8l7.9-7.9l2.8 2.8zm6.5-12.1l1.6-1.6l2.8 2.8l-1.6 1.6z"/><path d="M12 21h8.6v-2H14z" opacity=".5"/></g></svg>
                    <a href={{ route('note.edit', $note) }}>Edit</a>
                </button>
                        </div>
                   
                      <form action="{{ route('note.destroy', $note) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                           <button  class=" bg-red-500 text-white font-bold px-4 h-fit py-1 rounded-md shadow hover:bg-white hover:text-red-500 hover:border-red-500 flex justify-center items-center border-2 border-transparent transition-all duration-300 group gap-1 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 1025 1024"><path class="fill-white group-hover:fill-red-500"  d="M960.865 192h-896q-26 0-45-18.5t-19-45t18.5-45.5t45.5-19h320q0-26 18.5-45t45.5-19h128q27 0 45.5 19t18.5 45h320q26 0 45 19t19 45.5t-19 45t-45 18.5zm0 704q0 53-37.5 90.5t-90.5 37.5h-640q-53 0-90.5-37.5t-37.5-90.5V256h896v640zm-640-448q0-26-19-45t-45.5-19t-45 19t-18.5 45v384q0 27 18.5 45.5t45 18.5t45.5-18.5t19-45.5V448zm256 0q0-26-19-45t-45.5-19t-45 19t-18.5 45v384q0 27 18.5 45.5t45 18.5t45.5-18.5t19-45.5V448zm256 0q0-26-19-45t-45.5-19t-45 19t-18.5 45v384q0 27 18.5 45.5t45 18.5t45.5-18.5t19-45.5V448z"/></svg>
                        Delete</button>
                        </form>
                  

                    </div>

                </div>
            @endforeach
        </div>
        <div class="pt-6 flex justify-end  items-end w-11/12 lg:w-[700px] ">
           {{$notes -> links()}}
        </div>


    
    </div>
</x-app-layout>
