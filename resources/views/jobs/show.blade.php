<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            Show job
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form action="{{ route('jobs.edit', $jobUitDeController) }}" method="GET">
            @csrf

            <div>
                <x-jet-label for="job_desc" value="{{ __('job description') }}" />
                <x-jet-input id="job_desc" class="block mt-1 w-full" type="text" name="job_desc" value="{{ $jobUitDeController->job_desc }}" readonly  />
            </div>

            <div class="mt-4">
                <x-jet-label for="min_lvl" value="{{ __('minimum level') }}" />
                <x-jet-input id="min_lvl" class="block mt-1 w-full" type="min_lvl" name="min_lvl" value="{{ $jobUitDeController->min_lvl }}" readonly />
            </div>

            <div class="mt-4">
                <x-jet-label for="max_lvl" value="{{ __('maximum level') }}" />
                <x-jet-input id="max_lvl" class="block mt-1 w-full" type="max_lvl" name="max_lvl" value="{{ $jobUitDeController->max_lvl }}" readonly />
            </div>
            <div>
                <x-jet-button type="submit" class="ml-4">
                    {{ __('Bewerk Job') }}
                </x-jet-button>
            </div>
        </form>
        <br>
        <form action="{{ route('jobs.index') }}" method="GET">
            <div>
                <x-jet-button type="submit" class="ml-4">
                    {{ __('terug naar lijst') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>