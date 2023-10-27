<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Article;
use Livewire\Component;

class ArticleSearch extends Component
{
    public $amount = 6;
    public $notFound = '';
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
        if($this->articles->count() < 1){
            $this->notFound = '** لا توجد نتائج **';
        }else{
            $this->notFound = '';
        }
        return view('livewire.article-search',['tags'=>$tags,'articles'=>$this->articles,'amount'=>$this->amount,'notFound'=>$this->notFound]);
    }

    public function load()
    {
        $this->amount+=6;
    }
}
