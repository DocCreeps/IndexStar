<?php

namespace App\Http\Livewire;
use Exception;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Star as Stars;
use Livewire\WithFileUploads;

class Star extends Component
{
    use WithFileUploads;
    public $stars, $nom, $prenom, $description, $image, $updateStar = false,$starID, $addStar = false, $selectedStar;
    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteStarListner'=>'deleteStar'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:png,jpg,jpeg'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->nom = '';
        $this->prenom = '';
        $this->description = '';
        $this->image = '';
    }


    /**
     * render the star data
     *
     */
    public function render()
    {
        $this->stars = Stars::select('id', 'nom', 'prenom', 'description', 'image')->get();
        return view('livewire.star');
    }
    /**
     * Open Add Star form
     * @return void
     */
    public function addStar()
    {
        $this->resetFields();
        $this->addStar = true;
        $this->updateStar = false;
    }

    /**
     * store the user inputted star data in the star table
     * @return void
     */
    public function storeStar()
    {
        $this->validate();

        try {
            // Save and store the picture
            $imagePath = Storage::disk('public')->putFile('images', $this->image);

            Stars::create([
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'description' => $this->description,
                'image' => $imagePath
            ]);
            session()->flash('success','Star Created Successfully!!');
            $this->resetFields();
            $this->addStar = false;
        } catch (Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }

    /**
     * show existing star data in edit star form
     * @param mixed $id
     * @return void
     */
    public function editStar($id){
        try {
            $star = Stars::find($id);
            if( !$star) {
                session()->flash('error','Star not found');
            } else {
                $this->nom = $star->nom;
                $this->prenom = $star->prenom;
                $this->description = $star->description;
                $this->image = $star->image;
                $this->starID = $star->id;
                $this->updateStar = true;
                $this->addStar = false;
            }
        } catch (Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }

    }
    /**
     * update the star data
     * @return void
     */
    public function updateStar()
    {
        $this->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'description' => 'required',
            'image' => 'nullable'
        ]);
        try {
            $star = Stars::find($this->starID);

            $star->nom = $this->nom;
            $star->prenom = $this->prenom;
            $star->description = $this->description;

            // Vérifier si une nouvelle image est téléchargée
            if ($this->image && !is_string($this->image)) {
                // Supprimer l'ancienne image du stockage
                Storage::disk('public')->delete($star->image);

                // Téléchargement et stockage de la nouvelle image
                $imagePath = $this->image->store('images', 'public');
                $star->image = $imagePath;
            }

            $star->save();
            session()->flash('success', 'Star Updated Successfully!!');
            $this->resetFields();
            $this->updateStar = false;
            $this->redirect('/');
        } catch (Exception $ex) {
            session()->flash('error', 'Something went wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to star listing page
     * @return void
     */
    public function cancelStar()
    {
        $this->addStar = false;
        $this->updateStar = false;
        $this->resetFields();
    }

    /**
     * delete specific star data from the star table
     * @param mixed $id
     * @return void
     */
    public function deleteStar($id)
    {
        try{
            Stars::find($id)->delete();
            session()->flash('success',"Star Deleted Successfully!!");
        }catch(Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
       redirect()->to('/');
    }
    public function selectStar($id)
    {
        $this->selectedStar = Stars::find($id);
    }
}
