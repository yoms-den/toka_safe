<?php

namespace App\Livewire\EventReport\HazardReport\Documentation;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\HazardReport;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Models\HazardDocumentation;
use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    use WithFileUploads;
    public $modal = 'modal', $divider, $documentation_id, $current_step;
    #[Validate]
    public $description, $name_doc, $hazard_id, $file_doc;

    public function mount(HazardReport $doc)
    {
        $this->hazard_id = $doc->id;
    }
    public function render()
    {
        $this->divider="Add Documentation";
        return view('livewire.event-report.hazard-report.documentation.create');
    }
   
    public function rules()
    {
        return [
            'description' => 'required',
            'file_doc' => 'required|mimes:jpg,jpeg,png,xlsx,pdf,docx,csv',
        ];
    }
    public function messages()
    {
        return [
            'description.required' => 'Description is required',
            'file_doc.required' => 'File document is required',
            'file_doc.mimes' => 'Only jpg,jpeg,png,xlsx,pdf,docx,csv file types are allowed',
        ];
    }
    public function store()
    {
        $this->validate();
        $file_name = $this->file_doc->getClientOriginalName();

        $doc = HazardDocumentation::updateOrCreate(
            ['id' => $this->documentation_id],
            [
                'description' => $this->description,
                'name_doc' => $file_name,
                'hazard_id' => $this->hazard_id
            ]
        );
        if ($doc) {
            $this->file_doc->storeAs('public/documents/hazard', $file_name);
        }
        if ($this->documentation_id) {
            $this->dispatch(
                'alert',
                [
                    'text' => "Data has been updated",
                    'duration' => 3000,
                    'destination' => '/contact',
                    'newWindow' => true,
                    'close' => true,
                    'backgroundColor' => "linear-gradient(to right, #00b09b, #96c93d)",
                ]
            );
        } else {

            $this->dispatch(
                'alert',
                [
                    'text' => "Data added Successfully!!",
                    'duration' => 3000,
                    'destination' => '/contact',
                    'newWindow' => true,
                    'close' => true,
                    'backgroundColor' => "linear-gradient(to right, #00b09b, #96c93d)",
                ]
            );
            $this->reset('description');
            $this->reset('file_doc');
        }
        $this->dispatch('documents_hazard_created');
    }
     /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return 'sm';
    }
    public static function closeModalOnClickAway(): bool
    {
        return false;
    }
}
