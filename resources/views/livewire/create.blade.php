<div class="flex justify-center items-center h-screen">
    <div class="card mx-auto">
        <div class="card-body">
            <form>
                @csrf
                <div class="mb-3">
                    <label class="block">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Nom
                        </span>
                        <input type="text" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 @error('nom') border-red-500 @enderror" id="nom" placeholder="Entrez le nom" wire:model="nom">
                        @error('nom')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </label>
                </div>
                <div class="mb-3">
                    <label class="block">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Prénom
                        </span>
                        <input type="text" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 @error('prenom') border-red-500 @enderror" id="prenom" placeholder="Entrez le prénom" wire:model="prenom">
                        @error('prenom')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </label>
                </div>
                <div class="mb-3">
                    <label class="block">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Description
                        </span>
                        <textarea class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 @error('description') border-red-500 @enderror" id="description" wire:model="description" placeholder="Entrez la description"></textarea>
                        @error('description')
                        <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </label>
                </div>
                <div class="mb-3">
                    <label class="block">
                        <span class="sr-only">Choisir une photo de profil</span>
                        <input type="file" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100 @error('image') border-red-500 @enderror" id="image" wire:model="image">
                    </label>
                    @error('image')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid gap-2">
                    <button wire:click.prevent="storeStar()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Ajouter</button>
                    <button wire:click.prevent="cancelStar()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">Abandonner</button>
                </div>
            </form>
        </div>
    </div>
</div>
