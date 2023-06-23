<div class="card">
    <div class="card-body">
        <form>
            @csrf
            <div class="form-group mb-3">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" placeholder="Enter nom" wire:model="nom">
                @error('nom')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="prenom" placeholder="Enter prenom" wire:model="prenom">
                @error('prenom')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="description">Description:</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" wire:model="description" placeholder="Enter Description"></textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image">Photo:</label>
                <label for="file-input" class="sr-only">Choose file</label>
                <input type="text" class="form-control block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
                       file:bg-transparent file:border-0
                       file:bg-gray-100 file:mr-4
                       file:py-3 file:px-4
                       dark:file:bg-gray-700 dark:file:text-gray-400 @error('image') is-invalid @enderror" id="image" placeholder="Enter image" wire:model="image">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-grid gap-2">
                <button wire:click.prevent="storeStar()" class="btn btn-success btn-block">Save</button>
                <button wire:click.prevent="cancelStar()" class="btn btn-secondary btn-block">Cancel</button>
            </div>
        </form>
    </div>
</div>
