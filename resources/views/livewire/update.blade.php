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
                <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Enter image" wire:model="image">
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
