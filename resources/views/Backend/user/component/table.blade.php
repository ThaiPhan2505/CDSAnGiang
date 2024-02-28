<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                <input type="checkbox" value="" id="checkAll" class="input-checkbox">
            </th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Mật Khẩu</th>
            <th class="text-center">Trạng Thái</th>
            <th class="text-center">Thao Tác</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($users) && is_object($users))
        @foreach($users as $user)
        <tr >
            <td>
                <input type="checkbox" value="" id="checkItem" class="input-checkbox">
            </td>
            <td><span class="line">{{$user->name}}</span></td>
            <td>{{$user->email}}</td>
            <td class="">{{$user->password}}</td>
            <td class="text-center">
                <input type="checkbox" value="{{$user->status}}" 
                class="js-switch status" data-field="status" data-model="User" data-modelId="{{$user->id}}"
                {{($user->status == 'active' or 'Active') ? 'checked' : ''}} />
            </td>
            <td class="text-center">
                <a href="{{route('user.edit', $user->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                <a href="{{route('user.delete', $user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
{{$users->links('pagination::bootstrap-5')}}