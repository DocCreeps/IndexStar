<div class="parent md:h-screen md:grid md:grid-cols-6">
    <div class="sidebar md:col-span-1 text-center border-e bg-white ">
{{--                <div class="flex h-screen flex-col justify-between items-center border-e bg-white w-1/6">--}}
                    <div class="px-4 py-6">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-5">Listes des Stars</h2>

                        @if(!$addStar)
                            <button wire:click="addStar()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded-full">Add New Star</button>
                        @endif

                        <ul class="mt-6 space-y-1">
                            @foreach ($stars as $star)
                                <li class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
                                    <a wire:click="selectStar({{ $star->id }})" class="cursor-pointer">{{ $star->nom . ' ' . $star->prenom }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
            </div>
    <div class="main bg-grey-400 md:col-span-5">
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    @if($addStar)
                        @include('livewire.create')
                    @endif
                    @if($updateStar)
                        @include('livewire.update')
                    @endif
                        @if ($selectedStar)
                            @include('livewire.info')
                        @endif
        </div>
</div>
