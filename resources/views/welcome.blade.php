<h1>Hello from 1st Project of Laravel</h1>
<h2>Random Number {{rand()}}</h2>

<h3>Count is: {{$count}}</h3>
<h3>Student Name is: {{$students[1]}}</h3> 

@if($count==1)
<h5>Count is One</h5>
@elseif($count==3)
<h5>Count is Three</h5>
@else
<h5>Count is: {{$count}}</h5>
@endif

@for($i=1;$i<=10;$i++)
<h4>{{$i * 5}}</h4>
@endfor

@foreach($students as $s)
<h4>{{$s}}</h4>
@endforeach