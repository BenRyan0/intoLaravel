<x-layout>
    <div class="w-full h-full text-slate-700 relative flex justify-center items-center flex-col">
     <div class="flex justify-between w-11/12 lg:w-[700px] p-5">
          <h2 class="font-bold text-white text-2xl">My Notes</h2>
             <button
                class="bg-blue-400 p-2 rounded-sm text-white text-center justify-center flex items-center font-bold px-4 hover:bg-white hover:text-blue-400 transition-all duration-300 border-2 border-transparent hover:border-blue-400 h-[40px]">
                <a href={{ route('note.create') }}>Add
                    new note</a></button>
        </div>
        <div class="w-11/12 lg:w-[700px] h-[500px] p-5 shadow overflow-scroll overflow-x-hidden flex flex-col gap-6">
       
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
                    <div class="pt-3 flex justify-end gap-2">
                        <button
                            class="bg-purple-500 p-2 rounded-sm text-white font-bold px-4 hover:bg-white hover:text-purple-500 transition-all duration-300 border-2 border-transparent hover:border-purple-500">
                            <a href={{ route('note.show', $note) }}>Expand</a>
                        </button>
                        <button
                            class="bg-blue-400 p-2 rounded-sm text-white font-bold px-4 hover:bg-white hover:text-blue-400 transition-all duration-300 border-2 border-transparent hover:border-blue-400">
                            <a href={{ route('note.edit', $note) }}>Edit</a>
                        </button>
                        <form action="{{ route('note.destroy', $note) }}">
                            @csrf
                            @method('DELETE')

                            <button class="bg-red-400 p-2 rounded-sm text-white font-bold">Delete</button>

                        </form>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="pt-6 flex justify-end  items-end w-11/12 lg:w-[700px]">
           {{$notes -> links()}}
        </div>


    
    </div>
</x-layout>
