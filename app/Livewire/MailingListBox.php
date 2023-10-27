<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MailingList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MailingListBox extends Component
{

    public $email='';
    public $errorMessage='';
    public $successMessage='';
    public function submit()
    {
        if ($this->email=='') {
            $this->errorMessage = 'الرجاء ادخال بريد الكتروني';
            return;
        }
        MailingList::create([
            'user_id'=>auth()->check()?auth()->id():NULL,
            'email'=>$this->email,
        ]);
        $this->successMessage = 'تم الاشتراك بنجاح في القائمة البريدية';
        return view('livewire.mailing-list-box');
    }

    public function render()
    {
        return view('livewire.mailing-list-box');
    }
}
