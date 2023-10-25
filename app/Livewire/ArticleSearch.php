<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Article;
use Livewire\Component;

class ArticleSearch extends Component
{
    public $amount = 6;
    public $search ='';
    public $tagFilter ='';
    public $articles ;
    public function render()
    {
        $tags = Tag::get();
        $this->articles = Article::take($this->amount)->get();
        if($this->search){
            $this->articles = Article::where('meta_description','like','%'.$this->search.'%')
            ->orWhere('title','like','%'.$this->search.'%')
            ->take($this->amount)->get();
        }
        return view('livewire.article-search',['tags'=>$tags,'articles'=>$this->articles,'amount'=>$this->amount]);
    }

    public function load()
    {
        $this->amount+=6;
    }
}
