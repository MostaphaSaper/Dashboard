<div>
    <form method="POST" wire:submit.prevent="submit" action="{{ route('website.mailing-list') }}">
        @csrf
        <div class="d-flex flex-wrap">
            <input wire:model="email" type="email" name="email" placeholder="البريد الالكتروني" class="form-control">
            <button type="submit">سجل الآن</button>
            <div class="{{ $successMessage ? 'valid-feedback' : 'invalid-feedback' }} mt-2 ">
                {{ $successMessage ? $successMessage : $errorMessage }}
            </div>
        </div>
    </form>
</div>
