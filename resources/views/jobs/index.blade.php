<ul>
    @foreach ($jobs as $job)
        <li>
            <p>{{ $job->job_desc }}</p>
        </li>
    @endforeach
</ul>