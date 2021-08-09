<x-layout>
    <x-navbar></x-navbar>
    <div class="vh-100">
        <div class="h-100 p-3 mb-2 bg-dark text-dark d-flex justify-content-center align-items-center">
            <x-card :products="$products"></x-card>
        </div> 
    </div>
</x-layout>