<form wire:submit.prevent="sendEmail">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="row">
            <div class="col-md-6">
                <input wire:keydown="clearErrors"  wire:model="name" type="text" placeholder="Your name">
                @error('name')
                <small style="color: #c51122"><strong>{{$message}}</strong></small>
                @enderror
            </div>
            <div class="col-md-6">
                <input wire:keydown="clearErrors"  wire:model="email" type="text" placeholder="Your email">
                @error('email')
                <small style="color: #c51122"><strong>{{$message}}</strong></small>
                @enderror
            </div>
        </div>
    <div class="row">
        <div class="col-12">
            <input wire:keydown="clearErrors" wire:model="title" type="text" placeholder="Subject">
            @error('title')
                <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <textarea wire:keydown="clearErrors" wire:model="message" placeholder="Your Message"></textarea>
            @error('message')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>
    </div>
    <button wire:loading.class="disabled bg-secondary" type="submit" class="site-btn">
        <div wire:loading class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <span wire:loading class="ml-3">Sending...</span>
        <span wire:loading.remove>Send Message</span>
    </button>
</form>
