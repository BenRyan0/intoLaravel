<x-app-layout>
    <div class="w-full h-full text-slate-700 relative flex justify-center items-center flex-col min-h-screen">
        <div class="bg-white p-6 rounded-2xl shadow-lg w-11/12 lg:w-[700px] ">
            <div>
                <div class="flex justify-between flex-row gap-2 ">
                    <div
                        class="w-7/12 h-[100px] bg-gray-600 rounded-lg text-center flex justify-center items-center text-white/75">
                        img</div>
                    <div class="flex w-full justify-between relative">
                        <h2 class="font-bold text-lg pb-7 text-wrap text-start">{{ Str::words($note->title) }}
                            <p class="text-sm absolute bottom-0 text-end w-full">{{ $note->created_at }}</p>
                        </h2>
                    </div>
                </div>

                <p class="px-2 pt-3"> {{ $note->note }}</p>
            </div>
            <div class="pt-3 flex justify-end gap-2">
                 <a
                    href="{{ route('note.index') }}"
                    class=" bg-purple-500 text-white w-fit font-bold py-2 px-4 gap-1 rounded-md shadow hover:bg-white hover:text-purple-500 hover:border-purple-500 flex justify-center items-center border-2 border-transparent transition-all duration-300 text-center group"
                    >
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 1025 1024"><path class="fill-white group-hover:fill-purple-500"  d="M960.356 1024h-512q-27 0-45.5-19t-18.5-45V832q0-26 18.5-45t45.5-19h512q26 0 45 19t19 45v128q0 27-19 45.5t-45 18.5zm0-384h-512q-27 0-45.5-18.5t-18.5-45.5V448q0-27 18.5-45.5t45.5-18.5h512q26 0 45 18.5t19 45.5v128q0 27-19 45.5t-45 18.5zm0-384h-512q-27 0-45.5-19t-18.5-45V64q0-27 18.5-45.5t45.5-18.5h512q26 0 45 18.5t19 45.5v128q0 26-19 45t-45 19zm-768 768h-128q-26 0-45-19t-19-45V832q0-26 19-45t45-19h128q26 0 45 19t19 45v128q0 27-18.5 45.5t-45.5 18.5zm0-384h-128q-26 0-45-18.5t-19-45.5V448q0-27 19-45.5t45-18.5h128q26 0 45 18.5t19 45.5v128q0 27-18.5 45.5t-45.5 18.5zm0-384h-128q-26 0-45-19t-19-45V64q0-27 19-45.5t45-18.5h128q26 0 45 18.5t19 45.5v128q0 26-18.5 45t-45.5 19z"/></svg>
    
                    List
                    </a>
                <button
                     class=" bg-blue-500 text-white font-bold py-2 px-4 rounded-md shadow hover:bg-white hover:text-blue-500 hover:border-blue-500 flex justify-center items-center border-2 border-transparent transition-all duration-300 gap-1 group">
                     <svg xmlns="http://www.w3.org/2000/svg"  width="15" height="18" viewBox="0 0 24 24" fill="#ffffff"><g class="fill-white group-hover:fill-blue-500" fill="#ffffff"><path d="M15.9 2L3 14.9v5.7h5.7L21.5 7.7zM7.8 18.5H5v-2.8l7.9-7.9l2.8 2.8zm6.5-12.1l1.6-1.6l2.8 2.8l-1.6 1.6z"/><path d="M12 21h8.6v-2H14z" opacity=".5"/></g></svg>
                    <a href={{ route('note.edit', $note) }}>Edit</a>
                </button>
              <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                           <button  class=" bg-red-500 text-white font-bold py-2 px-4 rounded-md shadow hover:bg-white hover:text-red-500 hover:border-red-500 flex justify-center items-center border-2 border-transparent transition-all duration-300 group gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 1025 1024"><path class="fill-white group-hover:fill-red-500"  d="M960.865 192h-896q-26 0-45-18.5t-19-45t18.5-45.5t45.5-19h320q0-26 18.5-45t45.5-19h128q27 0 45.5 19t18.5 45h320q26 0 45 19t19 45.5t-19 45t-45 18.5zm0 704q0 53-37.5 90.5t-90.5 37.5h-640q-53 0-90.5-37.5t-37.5-90.5V256h896v640zm-640-448q0-26-19-45t-45.5-19t-45 19t-18.5 45v384q0 27 18.5 45.5t45 18.5t45.5-18.5t19-45.5V448zm256 0q0-26-19-45t-45.5-19t-45 19t-18.5 45v384q0 27 18.5 45.5t45 18.5t45.5-18.5t19-45.5V448zm256 0q0-26-19-45t-45.5-19t-45 19t-18.5 45v384q0 27 18.5 45.5t45 18.5t45.5-18.5t19-45.5V448z"/></svg>
                        Delete</button>
                        </form>
            </div>

        </div>
    </div>
</x-app-layout>
