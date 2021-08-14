<form action="{{ route('jobs.update', $jobUitDeController) }}" method="POST">
    @csrf
    @method("PUT")
    <label for="job_desc">Job description:</label><br>
    <input type="text" name="job_desc" id="job_desc" value="{{ $jobUitDeController->job_desc }}"><br>
    <label for="min_lvl">minimum level:</label><br>
    <input type="text" name="min_lvl" id="min_lvl" value="{{ $jobUitDeController->min_lvl }}"><br>
    <label for="max_lvl">maximum level:</label><br>
    <input type="text" name="max_lvl" id="max_lvl" value="{{ $jobUitDeController->max_lvl }}"><br>
    <input type="submit" value="Wijzig job">
</form>