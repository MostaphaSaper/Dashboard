<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProjectGallery;

class GalleryLoadMore extends Component
{
    public $amount = 3;
    public $tagFilter ='';
    public $galleries ;
    public function render()
    {
        $this->galleries = ProjectGallery::take($this->amount)->get();
        return view('livewire.gallery-load-more',['galleries'=>$this->galleries,'amount'=>$this->amount]);
    }

    public function load()
    {
        $this->amount+=3;
    }
}
