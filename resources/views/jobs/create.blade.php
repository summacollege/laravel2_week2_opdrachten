<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            Create new job
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf

            <div>
                <x-jet-label for="job_desc" value="{{ __('job description') }}" />
                <x-jet-input id="job_desc" class="block mt-1 w-full" type="text" name="job_desc" :value="old('job_desc')" required autofocus autocomplete="job_desc" />
            </div>

            <div class="mt-4">
                <x-jet-label for="min_lvl" value="{{ __('minimum level') }}" />
                <x-jet-input id="min_lvl" class="block mt-1 w-full" type="min_lvl" name="min_lvl" :value="old('min_lvl')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="max_lvl" value="{{ __('maximum level') }}" />
                <x-jet-input id="max_lvl" class="block mt-1 w-full" type="max_lvl" name="max_lvl" :value="old('max_lvl')" required />
            </div>

            <div>
                <x-jet-button class="ml-4">
                    {{ __('Create Job') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
