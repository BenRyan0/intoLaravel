<x-layout>
    <div class="w-full h-full text-slate-700 relative flex justify-center items-center flex-col">
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
    </div>
</x-layout>
