<div class="card">
    <div class="card-body">
        <form>
            @csrf
            <div class="mb-3">
                <label for="nom" class="block mb-1">Nom:</label>
                <input type="text" class="form-input @error('nom') border-red-500 @enderror" id="nom" placeholder="Enter nom" wire:model="nom">
                @error('nom')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prenom" class="block mb-1">Prénom:</label>
                <input type="text" class="form-input @error('prenom') border-red-500 @enderror" id="prenom" placeholder="Enter prenom" wire:model="prenom">
                @error('prenom')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="block mb-1">Description:</label>
                <textarea class="form-textarea @error('description') border-red-500 @enderror" id="description" wire:model="description" placeholder="Enter Description"></textarea>
                @error('description')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="block mb-1">Photo:</label>
                <input type="file" class="form-input @error('image') border-red-500 @enderror" id="image" wire:model="image">
                @error('image')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="grid gap-2">
                <button wire:click.prevent="storeStar()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">Save</button>
                <button wire:click.prevent="cancelStar()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">Cancel</button>
            </div>
        </form>
    </div>
</div>
