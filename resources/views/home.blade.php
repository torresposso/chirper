<x-layout>
  <x-slot:title>
    Welcome
  </x-slot:title>
  <div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold">Welcome to Chirper!</h1>
    @foreach ($chirps as $chirp)
      <div class="card bg-base-100 shadow mt-8">
        <div class="card-body">
          <div>
            <h2 class="text-xl font-bold">{{ $chirp['autor'] }}</h2>
            <p>{{ $chirp['message'] }}</p>
            <p class="text-sm text-gray-500">{{ $chirp['time'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</x-layout>