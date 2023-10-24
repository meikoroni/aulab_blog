<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    </tbody>
        <tr>
            @foreach ($roleRequests as $user )
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <button class="btn btn-info text white">{{$role}} activado</button>
                </td>
            @endforeach
            <td>
                @switch($role)
                @case('administrador')
                <a href="{{route('admin.setAdmin',compact('user'))}}" class="btn btn-info text-white">{{$role}} activado</a>
                @case('revisor')
                <a href="{{route('admin.setRevisor',compact('user'))}}" class="btn btn-info text-white">{{$role}} activado</a>
                @case('redactor')
                <a href="{{route('admin.setRedactor',compact('user'))}}" class="btn btn-info text-white">{{$role}} activado</a>
                @break
                @default
                @endswitch
            </td>
        </tr>
    </tbody>
</table>
