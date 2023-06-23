
<div class="flex justify-center">
    <div class="card w-96">
        <h3 class="text-xl font-bold mb-2">{{ $selectedStar->nom . ' ' . $selectedStar->prenom }}</h3>
        <img src="{{ asset('storage/' . $selectedStar->image) }}" alt="Star Image" class="w-40 h-40 object-cover rounded-full mb-2">
        <p class="text-gray-700 mb-4">{{ $selectedStar->description }}</p>
        <div class="flex justify-between">
            <button wire:click="deleteStar({{ $selectedStar->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full mr-2">Supprimer</button>
            <button wire:click="editStar({{ $selectedStar->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Éditer</button>
        </div>
    </div>
</div>
