<div class="flex justify-center items-center h-screen">
    <div class="card mx-auto">
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
                    <img src="{{ asset('storage/' . $star->image) }}" alt="Star Image" class="w-40 h-40 object-cover rounded-full mb-2">
                    <p>Changer de photo ?</p>
                    <input type="file" class="form-input @error('image') border-red-500 @enderror" id="image" wire:model="image">
                    @error('image')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid gap-2">
                    <button wire:click.prevent="updatePost()" class="btn btn-success btn-block">Update</button>
                    <button wire:click.prevent="cancelPost()" class="btn btn-secondary btn-block">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
