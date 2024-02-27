<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>
                <input type="checkbox" value="" id="checkAll" class="input-checkbox">
            </th>
            <th style="font-size: 14px">Tên Doanh Nghiệp</th>
            <th style="font-size: 14px">Loại Hình Doanh Nghiệp</th>
            <th style="font-size: 14px">Địa Chỉ</th>
            <th style="font-size: 14px">Số Điện Thoại</th>
            <th style="font-size: 14px" class="text-center">Xử Lý</th>
            <th style="font-size: 14px" class="text-center">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($doanhnghieps) && is_object($doanhnghieps))
        @foreach($doanhnghieps as $id => $dnghiep)
        <tr >
            <td>
                <input type="checkbox" value="" id="checkItem" class="input-checkbox">
            </td>
            <td><span class="line">{{$dnghiep->tentiengviet}}</span></td>
            {{-- @foreach($dnlh as $dnglh)
                <td>{{$dnglh->id}}</td>
            @endforeach --}}
            <td>{{$dnghiep->ngaylap}}</td>
            <td>{{$dnghiep->diachi}}</td>
            <td>{{$dnghiep->mota}}</td>
            {{-- @foreach($dnsdt as $dngsdt)
                <td>{{$dngsdt->sdt}}</td>
            @endforeach --}}
            <td class="text-center">
                <a class="btn btn-success " href="" 
                {{-- {{ URL::to('/admin/profileDN/' . $dnghiep->Id) }} --}}
                    style="font-size:13px;">Chi Tiết
                </a>
            </td>
            <td class="text-center">
                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
                {{-- @endforeach
            @endforeach --}}
        @endforeach
        @endif
    </tbody>
</table>
{{$doanhnghieps->links('pagination::bootstrap-5')}}