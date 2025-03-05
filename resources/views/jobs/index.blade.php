<x-layout>

    <h1>Available Jobs</h1>
    @if(!$jobs || $jobs->count() > 0)
        <ul>
            @foreach($jobs as $job)
                <li>
                    <a href="{{route('jobs.show', $job->id)}}">
                        {{$job->title}} - {{$job->description}}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No jobs available!</p>
    @endif

</x-layout>
