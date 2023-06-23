<div>
    <div class="col-md-8 mb-2">
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
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @if(!$addStar)
                    <button wire:click="addStar()" class="btn btn-primary btn-sm float-right">Add New Star</button>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>nom</th>
                            <th>Prénom</th>
                            <th>Description</th>
                            <th>image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (isset($star) && count($star) > 0)
                            @foreach ($star as $stars)
                                <tr>
                                    <td>
                                        {{ $stars->nom }}
                                    </td>
                                    </td>
                                    <td>
                                        {{ $stars->description }}
                                    </td>
                                    <td>
                                        <button wire:click="editStar({{ $stars->id }})" class="btn btn-primary btn-sm">Edit</button>
                                        <button onclick="deleteStar({{ $stars->id }})" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3" align="center">
                                    No Star Found.
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
