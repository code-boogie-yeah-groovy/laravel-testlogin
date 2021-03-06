@extends('layouts.app')

@section('content')
<div class="container">






list of employees
    <ul>
        @foreach($employees as $employee)
        <li>
            {{ $employee->name }}
            
            @php ($boolAdmin = false)

            @foreach($admins as $admin)
                @if($admin->emp_id == $employee->id)
                    <strong>admin</strong>
                    <a class="btn" href="{{ route('removeadmin', [$employee->id]) }}" onclick="return confirm('Are you sure?')">remove priviledge</a>
                    @php ($boolAdmin = true)
                @endif
            @endforeach

            @if ($boolAdmin == false)
                <a href="{{ route('makeadmin', [$employee->id]) }}" class="btn">make admin</a>
            @endif
        </li>
        @endforeach
    </ul>

</div>
@endsection
