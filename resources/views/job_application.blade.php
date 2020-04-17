<ul class="list-group">
  <li class="list-group-item"><b>Name: </b>{{ $job_application->first_name . ' ' . $job_application->last_name }}</li>
  <li class="list-group-item"><b>Email address: </b> {{ $job_application->email }}</li>
  <li class="list-group-item"><b>Phone: </b> {{ $job_application->phone }}</li>
  <li class="list-group-item"><b>Web Site: </b> {{ $job_application->web_site }}</li>
  <li class="list-group-item"><b>Date of Birth: </b> {{ $job_application->date_of_birth }}</li>
  <li class="list-group-item"><b>Address: </b>
    {{ $job_application->street_address}} <br>
    {{ $job_application->address_line_2  }} <br>
    {{ $job_application->city }} <br>
    {{ $job_application->state . '-' . $job_application->postal }} <br>
    {{ $job_application->country }} </li>
  <li class="list-group-item"><b>Sex: </b> {{ $job_application->sex }}</li>
  <li class="list-group-item"><b>Bio: </b> {{ $job_application->bio }}</li>
  <li class="list-group-item"><b>Division of Interest: </b><br>
    @php
    $divisions_of_internet = json_decode($job_application->divisions_of_internet , true);
    @endphp
    @if($divisions_of_internet)
    @foreach ( $divisions_of_internet as $i )
    {{ $i}} <br>
    @endforeach
    @endif
  </li>
  <li class="list-group-item"><b>Expected Salary: </b> {{ $job_application->salary . ' TK' }}</li>
  <li class="list-group-item"><b>Latest Degree: </b> {{ $job_application->latest_degree }}</li>
  <li class="list-group-item"><b>Year(s) of Experience: </b> {{ $job_application->experience . ' Year' }}</li>
  <li class="list-group-item"><b>Name of Current Designation: </b> {{ $job_application->designation }}</li>
  <li class="list-group-item"><b>CV: </b>
    @if(strlen($job_application->cv))
    <a href="/storage/{{ $job_application->cv }}">Download</a>
    @endif
  </li>
</ul>
