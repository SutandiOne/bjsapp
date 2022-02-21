<div class="min-h-screen flex flex-col sm:justify-center items-center pt-4 sm:pt-0 bg-green-100">
    <div class="w-1/6">
        <x-jet-authentication-card-logo />
        <br>
    </div>

    <div>
        {{ $title }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
