<x-layout>
  <div class="flex items-center justify-center min-h-screen ">
   <div class="bg-white p-6 rounded-2xl shadow-lg max-w-lg  min-w-[400px] w-full">
    <h1 class="text-2xl font-semibold mb-4 text-gray-800">Note Information</h1>
    <form action="{{route('note.update', $note)}}" method="POST">
    @csrf
    @method('PUT')
      <div class="mb-4">
        <label for="cardholder-name" class="block text-sm font-medium text-gray-700">Note Title</label>
        <input
          type="text"
          id="title"
          name="title"
          placeholder="Note Title"
          value="{{$note -> title}}"
          class="mt-1 block w-full p-2 rounded-sm border-gray-300 focus:ring-blue-500 focus:border-blue-500 shadow-sm"
          required
        />
      </div>
      <div class="mb-4">
        <label for="cardholder-name" class="block text-sm font-medium text-gray-700">Note </label>
        <textarea name="note" rows="4" id="note" class="w-full p-1 border-gray-300 focus:ring-blue-500 focus:border-blue-500 shadow-sm">
        {{$note -> note}}</textarea>
      </div>
      <!-- Submit Button -->
      <div class="flex gap-2">
        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-2 px-4 font-bold rounded-lg shadow hover:bg-blue-700 transition"
        >
          Submit
        </button>
        <a
        href="{{ route('note.index') }}"
          class=" bg-neutral-600 text-white font-bold py-2 px-4 rounded-lg shadow hover:bg-neutral-800 transition"
        >
          Cancel
        </a>
      </div>
    </form>
  </div>
</div>
</x-layout>

