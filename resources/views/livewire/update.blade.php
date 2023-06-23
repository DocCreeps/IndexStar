<div class="flex justify-center items-center h-screen">
    <div class="card mx-auto">
        <div class="card-body">
            <form>
                @csrf
                <div class="mb-3">
                    <label for="nom" class="block mb-1">Nom:</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500" id="nom" placeholder="Enter nom" wire:model="nom">
                    @error('nom')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prenom" class="block mb-1">Prénom:</label>
                    <input type="text" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500" id="prenom" placeholder="Enter prenom" wire:model="prenom">
                    @error('prenom')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="block mb-1">Description:</label>
                    <textarea class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500" id="description" wire:model="description" placeholder="Enter Description"></textarea>
                    @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="block mb-1">Photo:</label>
                    <img src="{{ asset('storage/' . $star->image) }}" alt="Star Image" class="w-40 h-40 object-cover rounded-full mb-2">
                    <p>Changer de photo ?</p>
                    <input type="file" class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:border-blue-500" id="image" wire:model="image">
                    @error('image')
                    <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="grid gap-2">
                    <button wire:click.prevent="updateStar()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full w-full">Update</button>
                    <button wire:click.prevent="cancelStar()" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full w-full">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
