<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <h1>Empleados seleccionados{{ count($employees) > 0 ? ': ' . count($employees) : '' }}</h1>
    
    @forelse ($employees as $e)
        <div class="box"> 
            <table>
                <tr>
                    <td><ul><span class="data">ID:</span></td>
                    <td>{{ $e->emp_id }}</td>
                </tr>
                <tr>
                    <td><ul><span class="data">First Name:</span></td>
                    <td>{{ $e->emp_firstname }}</td>
                </tr>
                <tr>
                    <td><ul><span class="data">Last Name:</span></td>
                    <td>{{ $e->emp_lastname }}</td>
                </tr>
                <tr>
                    <td><ul><span class="data">Age:</span></td>
                    <td>{{ \Carbon\Carbon::parse($e->emp_birth_date)->age }} / <span class='s'>({{ $e->emp_birth_date }})</span> </td>
                </tr>
                <tr>
                    <td><ul><span class="data">Hire Date:</span></td>
                    <td>{{ \Carbon\Carbon::parse($e->emp_hire_date)->format('Y / M / D d') }}</td>
                </tr>
            </table>
        </div>
            
        
        
    @empty
    <p>No hay empleados que cumplan el criterio</p>
     @endforelse
</body>
</html>