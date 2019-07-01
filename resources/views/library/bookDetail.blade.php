

<table class="table table-bordered hover container mt-4" id="data-table">
    <thead>
        <tr>
            <td>Book Name</td>
            <td> publisher Name  </td>
            <td> Author Name  </td>
            <td> Book Code</td>
            <td>Book Type</td>
            <td class="">Availability</td>
            <td>ISBN Code</td>
            <td>Quantity</td>
            <td>Price</td>
            <td>Faculty</td>

            <td> Action</td>
        </tr>
    </thead>
@foreach($books as $row)
    <tbody>
    <tr


    >
        <td>{{$row->bookName}}</td>
        <td>{{$row->publisher}}</td>
        <td>  {{$row->authorName}}  </td>
        <td> {{$row->bookCode  }} </td>
        <td> {{$row->bookType}} </td>
        <td  class=""> {{--<span class="badge  badge-success  h-35 w-100">Available </span>
            <span class="badge  badge-danger  h-35 w-100">Not Available </span>--}}
            {{ $row->quantity !==  0 ?  'Available'  : 'Not Available'   }}


        </td>
        <td class="">  {{$row->isbnCode}}  </td>
        <td> {{$row->quantity}} </td>
        <td> {{$row->price}} </td>
        <td>{{$row->facultyId}}</td>

        <td class="btn btn-warning btn-sm">Edit</td>
    </tr>
    </tbody>
@endforeach
</table>