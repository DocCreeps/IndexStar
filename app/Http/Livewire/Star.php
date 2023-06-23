<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Star;

class StarComponent extends Component
{

    public $stars, $nom, $prenom, $description, $image, $starID, $updateStar = false, $addStar = false;
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
        'image' => 'required'
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
        $this->stars = Star::select('id', 'nom', 'prenom', 'description', 'image')->get();
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
            self::create([
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'description' => $this->description,
                'image' => $this->image
            ]);
            session()->flash('success','Star Created Successfully!!');
            $this->resetFields();
            $this->addStar = false;
        } catch (\Exception $ex) {
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
            $star = self::findOrFail($id);
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
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }

    }
    /**
     * update the star data
     * @return void
     */
    public function updateStar()
    {
        $this->validate();
        try {
            self::whereId($this->starId)->update([
                'nom' => $this->nom,
                'prenom' => $this->prenom,
                'description' => $this->description,
                'image' => $this->image
            ]);
            session()->flash('success','Star Updated Successfully!!');
            $this->resetFields();
            $this->updateStar = false;
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
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
            self::find($id)->delete();
            session()->flash('success',"Star Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }

}
