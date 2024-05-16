<form wire:submit="sendEmail()">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="row">
            <div class="col-md-6">
                <input  wire:model="name" type="text" placeholder="Your name">
                @error('name')
                <small style="color: #c51122"><strong>{{$message}}</strong></small>
                @enderror
            </div>
            <div class="col-md-6">
                <input  wire:model="email" type="text" placeholder="Your email">
                @error('email')
                <small style="color: #c51122"><strong>{{$message}}</strong></small>
                @enderror
            </div>
        </div>
    <div class="row">
        <div class="col-12">
            <input  wire:model="title" type="text" placeholder="Subject">
            @error('title')
                <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <textarea  wire:model="message" placeholder="Your Message"></textarea>
            @error('message')
            <small style="color: #c51122"><strong>{{$message}}</strong></small>
            @enderror
        </div>
    </div>
    <button type="submit" class="site-btn">Send Message</button>
</form>
