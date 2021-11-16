@php
    $inputClasses = 'w-full p-4 border border-darkblue-500';
    $errorClasses = 'border-red-500 border';
@endphp
<div class="max-w-lg mx-auto lg:max-w-none">
    @if ($saved)
        <x-success-alert :message="$successMessage"/>
    @else
        <form class="grid grid-cols-1 gap-y-6" wire:submit.prevent="save" novalidate>
            <div>
                <label for="email" class="sr-only">{{__('Email')}}</label>
                <input id="email" name="email" type="email" autocomplete="email"
                       wire:model="contactForm.email"
                       class="{{$inputClasses}} @error('contactForm.email') {{$errorClasses}} @enderror"
                       placeholder="Email">
                @error('contactForm.email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="phone_number" class="sr-only">{{__('Phone')}}</label>
                <input type="text" name="phone" id="phone_number" autocomplete="tel"
                       wire:model="contactForm.phone_number"
                       class="{{$inputClasses}} @error('contactForm.phone_number') {{$errorClasses}} @enderror"
                       placeholder="Phone">
                @error('contactForm.phone_number')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="title" class="sr-only">{{__('Subject')}}</label>
                <input type="text" name="title" id="title"
                       wire:model="contactForm.title"
                       class="{{$inputClasses}} @error('contactForm.title') {{$errorClasses}} @enderror"
                       placeholder="Subject">
                @error('contactForm.title')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="message" class="sr-only">{{__('Message')}}</label>
                <textarea id="message" name="message" rows="4"
                          wire:model="contactForm.message"
                          class="{{$inputClasses}} @error('contactForm.message') {{$errorClasses}} @enderror"
                          placeholder="Message"></textarea>
                @error('contactForm.message')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit">
                    {{__('Send')}}
                </button>
            </div>
        </form>
    @endif
</div>
