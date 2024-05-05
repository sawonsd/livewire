<div>
    <main class="h-full  max-w-full">
        <div class="container full-container p-0 flex flex-col gap-6">
            @include('livewire.layouts.header')

            <div class="card">
                <div class="card-body">
                    {{-- @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif --}}
                    @if (session()->has('message'))
                    <div class="bg-teal-400 border text-sm text-teal-500 rounded-sm p-4 mb-5" role="alert">
                        <span class="font-bold">Success</span> alert! {{ session('message') }}.
                    </div>
                    @endif

                <form wire:submit="storeStudent">
                    <div class="mb-6">
                        <label for="input-label-with-helper-text" class="block text-sm mb-2 text-gray-400">Name</label>
                        <input type="text" wire:model="name" id="input-label-with-helper-text" class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " placeholder="Enter your name" aria-describedby="hs-input-helper-text">
                        @error('name') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-6">
                        <label for="input-label-with-helper-text" class="block text-sm mb-2 text-gray-400">Phone</label>
                        <input type="number" wire:model="phone" id="input-label-with-helper-text" class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " placeholder="Enter your phone" aria-describedby="hs-input-helper-text">
                        @error('phone') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>

                    

                    <div
                        x-data="{ isUploading: false, progress: 0 }"
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                    >
                    <div class="mb-6">
                        <label for="input-label-with-helper-text" class="block text-sm mb-2 text-gray-400">Photo</label>
                        <input type="file" wire:model="photo" accept="image/jpeg, image/png, video/mp4" id="input-label-with-helper-text" class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " placeholder="Enter your photo" aria-describedby="hs-input-helper-text">
                        @error('photo') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    
                        <!-- Progress Bar -->
                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>

                    @if ($photo)
                        Photo Preview:
                        <img width="200" class="p-3" src="{{ $photo->temporaryUrl() }}">
                    @endif


                    @foreach ($students as $student)
                        {{-- <img src="{{Storage::url($student->photo)}}" alt="fd"> --}}
                        <img width="200" class="p-3" src="{{asset('storage')}}/{{$student->photo }}" alt="fd">
                    @endforeach

                    <div class="mb-6">
                        <label for="input-label-with-helper-text" class="block text-sm mb-2 text-gray-400">Password</label>
                        <input type="password" wire:model="password" id="input-label-with-helper-text" class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 " placeholder="*******" aria-describedby="hs-input-helper-text">
                        @error('password') <span class="error text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex mb-4">
                        <input type="checkbox" class="shrink-0 mt-0.5 border-gray-400 rounded-[4px] text-blue-600 focus:ring-blue-500 " id="hs-default-checkbox">
                        <label for="hs-default-checkbox" class="text-sm text-gray-400 ms-3">Check me out</label>
                      </div>
                      <button class="btn text-base py-2.5 text-white font-medium w-fit hover:bg-blue-700">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </main>
</div>