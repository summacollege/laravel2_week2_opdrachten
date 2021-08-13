<div>
    <ul>
        @foreach ($jobs as $job)
            <li>
                {{ $job->job_desc }}
            </li>
        @endforeach
    </ul>
</div>
