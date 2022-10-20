<x-app-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col">Name</div>
            <div class="col">{{ $product->name }}</div>
        </div>
        <div class="row">
            <div class="col">Amount</div>
            <div class="col">{{ $product->amount }}</div>
        </div>
        <div class="row">
            <div class="col">Price</div>
            <div class="col">{{ $product->price }}</div>
        </div>
    </div>
</x-app-layout>
