{{-- <form action="{{ route('jobs.update', $jobUitDeController) }}" method="POST">
    @csrf
    @method("PUT")
    <label for="job_desc">Job description:</label><br>
    <input type="text" name="job_desc" id="job_desc" value="{{ $jobUitDeController->job_desc }}"><br>
    <label for="min_lvl">minimum level:</label><br>
    <input type="text" name="min_lvl" id="min_lvl" value="{{ $jobUitDeController->min_lvl }}"><br>
    <label for="max_lvl">maximum level:</label><br>
    <input type="text" name="max_lvl" id="max_lvl" value="{{ $jobUitDeController->max_lvl }}"><br>
    <input type="submit" value="Wijzig job">
</form> --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new job') }}
        </h2>
    </x-slot>

    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form action="{{ route('jobs.update', $jobUitDeController) }}" method="POST">
            @csrf
            @method("PUT")
            <div>
                <x-jet-label for="job_desc" value="{{ __('job description') }}" />
                <x-jet-input id="job_desc" class="block mt-1 w-full" type="text" name="job_desc" value="{{ $jobUitDeController->job_desc }}" required autofocus autocomplete="job_desc" />
            </div>

            <div class="mt-4">
                <x-jet-label for="min_lvl" value="{{ __('minimum level') }}" />
                <x-jet-input id="min_lvl" class="block mt-1 w-full" type="min_lvl" name="min_lvl" value="{{ $jobUitDeController->min_lvl }}" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="max_lvl" value="{{ __('maximum level') }}" />
                <x-jet-input id="max_lvl" class="block mt-1 w-full" type="max_lvl" name="max_lvl" value="{{ $jobUitDeController->max_lvl }}" required />
            </div>

            <div>
                <x-jet-button class="ml-4">
                    {{ __('Update Job') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-app-layout>
